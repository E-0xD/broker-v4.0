<div class="mt-5">
    <div class="row">
        <!-- Trading Form -->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title">Place Trade</h4>
                </div>
                <div class="card-body">
                    <form wire:submit="placeTrade">
                        <div class="mb-3">
                            <label class="form-label">Market</label>
                            <select wire:model.live="market" class="form-select">
                                <option value="forex">Forex</option>
                                <option value="crypto">Crypto</option>
                            </select>
                            @error('market')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Symbol</label>
                            <select wire:model.live="symbol" class="form-select">
                                @if ($market === 'forex')
                                    <option value="EURUSD">EUR/USD</option>
                                    <option value="GBPUSD">GBP/USD</option>
                                    <option value="USDJPY">USD/JPY</option>
                                    <option value="AUDUSD">AUD/USD</option>
                                @else
                                    <option value="BTCUSD">Bitcoin (BTC/USD)</option>
                                    <option value="ETHUSD">Ethereum (ETH/USD)</option>
                                    <option value="XRPUSD">Ripple (XRP/USD)</option>
                                    <option value="SOLUSD">Solana (SOL/USD)</option>
                                    <option value="ADAUSD">Cardano (ADA/USD)</option>
                                    <option value="DOTUSD">Polkadot (DOT/USD)</option>
                                    <option value="MATICUSD">Polygon (MATIC/USD)</option>
                                    <option value="LINKUSD">Chainlink (LINK/USD)</option>
                                    <option value="AVAXUSD">Avalanche (AVAX/USD)</option>
                                    <option value="UNIUSD">Uniswap (UNI/USD)</option>
                                @endif
                            </select>
                            @error('symbol')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Type</label>
                            <select wire:model="type" class="form-select">
                                <option value="buy">Buy</option>
                                <option value="sell">Sell</option>
                            </select>
                            @error('type')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Amount ({{ Auth::user()->currency }})</label>
                            <input type="number" wire:model="amount" class="form-control" step="0.01"
                               >
                            @error('amount')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Take Profit (Optional)</label>
                            <input type="number" wire:model="takeProfit" class="form-control" step="0.00001">
                            @error('takeProfit')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Stop Loss (Optional)</label>
                            <input type="number" wire:model="stopLoss" class="form-control" step="0.00001">
                            @error('stopLoss')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Place Trade</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- TradingView Chart -->
        <div class="col-xl-8" wire:ignore>
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title">Chart</h4>
                </div>
                <div class="card-body">
                    <div class="tradingview-widget-container" >
                        <div id="tradingview_chart"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js" ></script>
                        <script type="text/javascript">
                            new TradingView.widget({
                                "width": "100%",
                                "height": 500,
                                "symbol": "{{ $market === 'crypto' ? 'COINBASE:' . substr($symbol, 0, -3) . 'USD' : 'FX:' . $symbol }}",
                                "interval": "1",
                                "timezone": "exchange",
                                "theme": "dark",
                                "style": "1",
                                "toolbar_bg": "#f1f3f6",
                                "enable_publishing": false,
                                "allow_symbol_change": true,
                                "container_id": "tradingview_chart"
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Active Trades -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title">Active Trades</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Symbol</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Entry Price</th>
                                    <th>Current Price</th>
                                    <th>Take Profit</th>
                                    <th>Stop Loss</th>
                                    <th>P&L</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($activeTrades as $trade)
                                    <tr>
                                        <td>{{ $trade->symbol }}</td>
                                        <td>{{ ucfirst($trade->type) }}</td>
                                        <td>{{ number_format($trade->amount, 2) }}</td>
                                        <td>{{ number_format($trade->entry_price, 5) }}</td>
                                        <td>{{ number_format($trade->current_price, 5) }}</td>
                                        <td>{{ $trade->take_profit ? number_format($trade->take_profit, 5) : '-' }}
                                        </td>
                                        <td>{{ $trade->stop_loss ? number_format($trade->stop_loss, 5) : '-' }}</td>
                                        <td class="{{ $trade->pnl >= 0 ? 'text-success' : 'text-danger' }}">
                                            {{ number_format($trade->pnl, 2) }}
                                        </td>
                                        <td>
                                            <button wire:click="closeTrade({{ $trade->id }})"
                                                class="btn btn-danger btn-sm">
                                                Close
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Trade History -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title">Trade History</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Symbol</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Entry Price</th>
                                    <th>Close Price</th>
                                    <th>P&L</th>
                                    <th>Closed At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($closedTrades as $trade)
                                    <tr>
                                        <td>{{ $trade->symbol }}</td>
                                        <td>{{ ucfirst($trade->type) }}</td>
                                        <td>{{ number_format($trade->amount, 2) }}</td>
                                        <td>{{ number_format($trade->entry_price, 5) }}</td>
                                        <td>{{ number_format($trade->current_price, 5) }}</td>
                                        <td class="{{ $trade->pnl >= 0 ? 'text-success' : 'text-danger' }}">
                                            {{ number_format($trade->pnl, 2) }}
                                        </td>
                                        <td>{{ $trade->closed_at->format('Y-m-d H:i:s') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
