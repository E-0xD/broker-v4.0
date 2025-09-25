<x-layouts.app>

    <x-layouts.app.breadcrum title="Dashboard" />

    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="d-flex card-header justify-content-between align-items-center">
                            <h4 class="header-title">Total Balance</h4>

                        </div>

                        <div class="card-body pt-0">
                            <h2 class="fw-bold">{{ Auth::user()->currency . ' ' . number_format($user->balance) }}</h2>

                            <div class="row g-2 mt-2 pt-1">
                                <div class="col">
                                    <a href="{{ route('deposit.create') }}" class="btn btn-primary w-100">
                                        Deposit</a>
                                </div>
                                <div class="col">
                                    <a href="{{ route('withdraw.create') }}" class="btn btn-info w-100">
                                        Withdraw</a>
                                </div>
                            </div>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->

                <div class="col-xl-4">
                    <div class="card">
                        <div class="d-flex card-header justify-content-between align-items-center">
                            <h4 class="header-title">Total Active Investment</h4>

                        </div>

                        <div class="card-body pt-0">
                            <h2 class="fw-bold">
                                {{ Auth::user()->currency . ' ' . number_format($totalActiveInvestment, 2) }}</h2>

                            <div class="row g-2 mt-2 pt-1">
                                <div class="col">
                                    <a href="{{ route('investment.create') }}" class="btn btn-primary w-100">
                                        Invest</a>
                                </div>

                                @if ($totalActiveInvestment > 0)
                                    <div class="col">
                                        <form action="{{ route('investments.close-all') }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to close all active investments? This will return your initial investment amount to your balance.');">
                                            @csrf
                                            <button type="submit" class="btn btn-danger w-100">Close Positions</button>
                                        </form>
                                    </div>
                                @endif

                            </div>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->

                <div class="col-xl-4">
                    <div class="card">
                        <div class="d-flex card-header justify-content-between align-items-center">
                            <h4 class="header-title">Total Active Trades</h4>

                        </div>

                        <div class="card-body pt-0">
                            <h2 class="fw-bold">
                                {{ Auth::user()->currency . ' ' . number_format($totalActiveTrades, 2) }}</h2>

                            <div class="row g-2 mt-2 pt-1">
                                <div class="col-6">
                                    <a href="{{ route('trading') }}" class="btn btn-primary w-100">
                                        Buy</a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ route('trading') }}" class="btn btn-danger w-100">
                                        Sell</a>
                                </div>

                            </div>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->

            </div> <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex flex-wrap align-items-center gap-2">
                            <h4 class="header-title me-auto mb-0">Overview</h4>

                        </div>

                        <div class="card-body p-0">
                            <div class="bg-light bg-opacity-50">
                                <div class="row text-center">
                                    <div class="col-md col-6">
                                        <p class="text-muted mt-3 mb-1">Total Active Investment</p>
                                        <h4 class="mb-3">
                                            <span
                                                class="fw-semibold">{{ Auth::user()->currency . ' ' . number_format($totalActiveInvestment, 2) }}</span>
                                        </h4>
                                    </div>
                                    <div class="col-md col-6">
                                        <p class="text-muted mt-3 mb-1">Total Investment</p>
                                        <h4 class="mb-3">
                                            <span
                                                class="fw-semibold">{{ Auth::user()->currency . ' ' . number_format($totalInvestment, 2) }}</span>
                                        </h4>
                                    </div>
                                    <div class="col-md col-6">
                                        <p class="text-muted mt-3 mb-1">Daily ROI</p>
                                        <h4 class="mb-3">
                                            <span
                                                class="fw-semibold">{{ Auth::user()->currency . ' ' . number_format($totalDailyRoi, 2) }}</span>
                                        </h4>
                                    </div>
                                    <div class="col-md col-6">
                                        <p class="text-muted mt-3 mb-1">Lifetime Profit</p>
                                        <h4 class="mb-3">
                                            <span
                                                class="fw-semibold">{{ Auth::user()->currency . ' ' . number_format($lifetimeProfit, 2) }}</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div dir="ltr" class="p-2">
                                <div id="balance-overview" class="apex-charts" data-colors="#465dff,#6ac75a,#f9c45c">
                                </div>
                            </div>
                            <script>
                                var chartData = @json($chartData);
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
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

            <!-- TradingView Widgets -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="header-title">Market Heat Map</h4>
                        </div>
                        <div class="card-body">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-heat-map.js" async>
                                    {
                                        "width": "100%",
                                        "height": "400",
                                        "currencies": [
                                            "EUR",
                                            "USD",
                                            "JPY",
                                            "GBP",
                                            "CHF",
                                            "AUD",
                                            "CAD",
                                            "NZD"
                                        ],
                                        "isTransparent": false,
                                        "colorTheme": "dark",
                                        "locale": "en"
                                    }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="header-title">Live Market News</h4>
                        </div>
                        <div class="card-body">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                                    {
                                        "feedMode": "market",
                                        "colorTheme": "dark",
                                        "isTransparent": false,
                                        "displayMode": "regular",
                                        "width": "100%",
                                        "height": "400",
                                        "locale": "en"
                                    }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

    </div> <!-- end row -->

</x-layouts.app>
