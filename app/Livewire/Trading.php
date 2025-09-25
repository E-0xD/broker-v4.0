<?php

namespace App\Livewire;

use App\Models\Trade;
use App\Services\PriceService;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Trading extends Component
{
    public string $type = 'buy';
    public string $market = 'forex';
    public string $symbol = 'EURUSD';
    public float $amount = 0;
    public ?float $takeProfit = null;
    public ?float $stopLoss = null;
    public float $currentPrice = 0;
    private PriceService $priceService;

    public function boot()
    {
        $this->priceService = new PriceService();
    }

    public function updatedSymbol()
    {
        try {
            $this->currentPrice = $this->priceService->getCurrentPrice($this->symbol, $this->market);
        } catch (\Throwable $th) {
            Log::error($th);
        }
    }

    public function updatedMarket()
    {
        // Reset symbol when market changes
        $this->symbol = $this->market === 'forex' ? 'EURUSD' : 'BTCUSD';
        $this->updatedSymbol();
    }

    protected $rules = [
        'type' => 'required|in:buy,sell',
        'market' => 'required|in:forex,crypto',
        'symbol' => 'required|string',
        'amount' => 'required|numeric|min:0.01',
        'takeProfit' => 'nullable|numeric',
        'stopLoss' => 'nullable|numeric',
    ];

    public function placeTrade()
    {
        try {
            // Get fresh price before placing trade
            $currentPrice = $this->priceService->getCurrentPrice($this->symbol, $this->market);
            $this->currentPrice = $currentPrice;

            $validated = $this->validate();

            if ($validated['amount'] > Auth::user()->balance) {
                $this->addError('amount', 'Insufficient balance');
                return;
            }

            $trade = Trade::create([
                'user_id' => Auth::id(),
                'type' => $validated['type'],
                'symbol' => $validated['symbol'],
                'market' => $validated['market'],
                'amount' => $validated['amount'],
                'entry_price' => $currentPrice,
                'take_profit' => $validated['takeProfit'],
                'stop_loss' => $validated['stopLoss'],
                'current_price' => $currentPrice
            ]);

            // Deduct the amount from user's balance
            $user = Auth::user();
            $user->balance -= $validated['amount'];
            $user->save();

            $this->dispatch('sweet-alert', [
                'icon' => 'success',
                'title' => 'Trade Placed Successfully',
                'text' => "Your {$validated['type']} order for {$validated['symbol']} has been placed."
            ]);

            $this->reset(['amount', 'takeProfit', 'stopLoss']);
        }  catch (\Throwable $th) {
            Log::error($th);
        }
    }

    public function closeTrade($tradeId)
    {
        $trade = Trade::findOrFail($tradeId);

        if ($trade->user_id !== Auth::id()) {
            return;
        }

        $trade->status = 'closed';
        $trade->closed_at = now();
        $trade->save();

        // Return funds + profit/loss to user's balance
        $user = Auth::user();
        $user->balance += $trade->amount + $trade->pnl;
        $user->save();

        $this->dispatch('sweet-alert', [
            'icon' => 'success',
            'title' => 'Trade Closed',
            'text' => "Your trade has been closed successfully."
        ]);
    }

    public function render()
    {
        return view('livewire.trading', [
            'activeTrades' => Auth::user()->trades()->where('status', 'open')->get(),
            'closedTrades' => Auth::user()->trades()->where('status', 'closed')->latest()->take(10)->get()
        ]);
    }
}
