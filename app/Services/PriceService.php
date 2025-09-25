<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PriceService
{


    public function getCurrentPrice(string $symbol, string $market): float
    {
        return match ($market) {
            'crypto' => $this->getCryptoPrice($symbol),
            'forex' => $this->getForexPrice($symbol),
            default => throw new \InvalidArgumentException('Invalid market type'),
        };
    }

    protected function getCryptoPrice(string $symbol): float
    {
        try {
            // Convert trading pair (e.g., BTCUSD) to CoinGecko format
            $coin = strtolower(substr($symbol, 0, -3)); // Remove USD
            $coin = match($coin) {
                'btc' => 'bitcoin',
                'eth' => 'ethereum',
                'sol' => 'solana',
                'xrp' => 'ripple',
                'ada' => 'cardano',
                'dot' => 'polkadot',
                'matic' => 'matic-network',
                'link' => 'chainlink',
                'avax' => 'avalanche-2',
                'uni' => 'uniswap',
                default => $coin
            };

            $response = Http::get(config('services.coingheko.url'), [
                'ids' => $coin,
                'vs_currencies' => 'usd',
            ]);

            if ($response->successful()) {
                $data = $response->json();
                if (isset($data[$coin]['usd'])) {
                    return (float) $data[$coin]['usd'];
                }
            }

            throw new \RuntimeException('Failed to fetch crypto price from CoinGecko');
        } catch (\Exception $e) {
            Log::error($e);
            throw new \RuntimeException('Failed to fetch crypto price');
        }
    }

    protected function getForexPrice(string $symbol): float
    {
        try {
            $response = Http::get(config('services.alphavantage.url'), [
                'function' => 'CURRENCY_EXCHANGE_RATE',
                'from_currency' => substr($symbol, 0, 3),
                'to_currency' => substr($symbol, 3, 3),
                'apikey' => config('services.alphavantage.key'),
            ]);

            if ($response->successful()) {
                $data = $response->json();
                if (isset($data['Realtime Currency Exchange Rate']['5. Exchange Rate'])) {
                    return (float) $data['Realtime Currency Exchange Rate']['5. Exchange Rate'];
                }
            }

            throw new \RuntimeException('Failed to fetch forex price from Alpha Vantage');
        } catch (\Exception $e) {
            Log::error($e);
            throw new \RuntimeException('Failed to fetch forex price');
        }
    }
}