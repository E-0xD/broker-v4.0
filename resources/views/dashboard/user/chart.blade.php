<x-layouts.app>

    <x-layouts.app.breadcrum title="Live Chart" />

    <div class="row">
        <div class="col-xxl-9">
            <!-- Forex Chart -->
            <div class="mb-4">
                <h5 class="mb-2">Live Forex Chart</h5>
                <div class="tradingview-widget-container">
                    <div id="forex_chart"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script type="text/javascript">
                        new TradingView.widget({
                            "width": "100%",
                            "height": 400,
                            "symbol": "FX:EURUSD",
                            "interval": "30",
                            "timezone": "Etc/UTC",
                            "theme": "light",
                            "style": "1",
                            "locale": "en",
                            "container_id": "forex_chart"
                        });
                    </script>
                </div>
            </div>

            <!-- Crypto Chart -->
            <div class="mb-4">
                <h5 class="mb-2">Live Crypto Chart</h5>
                <div class="tradingview-widget-container">
                    <div id="crypto_chart"></div>
                    <script type="text/javascript">
                        new TradingView.widget({
                            "width": "100%",
                            "height": 400,
                            "symbol": "BINANCE:BTCUSDT",
                            "interval": "30",
                            "timezone": "Etc/UTC",
                            "theme": "light",
                            "style": "1",
                            "locale": "en",
                            "container_id": "crypto_chart"
                        });
                    </script>
                </div>
            </div>

            <!-- Stocks Chart -->
            <div class="mb-4">
                <h5 class="mb-2">Live Stocks Chart</h5>
                <div class="tradingview-widget-container">
                    <div id="stocks_chart"></div>
                    <script type="text/javascript">
                        new TradingView.widget({
                            "width": "100%",
                            "height": 400,
                            "symbol": "NASDAQ:AAPL",
                            "interval": "30",
                            "timezone": "Etc/UTC",
                            "theme": "light",
                            "style": "1",
                            "locale": "en",
                            "container_id": "stocks_chart"
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>
