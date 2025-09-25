<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Trade extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'symbol',
        'market',
        'amount',
        'entry_price',
        'take_profit',
        'stop_loss',
        'current_price',
        'pnl',
        'status',
        'closed_at'
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'entry_price' => 'decimal:5',
        'take_profit' => 'decimal:5',
        'stop_loss' => 'decimal:5',
        'current_price' => 'decimal:5',
        'pnl' => 'decimal:2',
        'closed_at' => 'datetime'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function calculatePnL(): void
    {
        if ($this->status === 'closed') {
            return;
        }

        $priceDiff = $this->current_price - $this->entry_price;
        $multiplier = $this->type === 'buy' ? 1 : -1;
        $this->pnl = $priceDiff * $this->amount * $multiplier;
        $this->save();
    }
}