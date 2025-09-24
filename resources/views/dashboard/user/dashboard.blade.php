<x-layouts.app>

    <x-layouts.app.breadcrum title="Dashboard" />

    <div class="row">
        <div class="col-xxl-9">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="d-flex card-header justify-content-between align-items-center">
                            <h4 class="header-title">Total Balance</h4>

                        </div>

                        <div class="card-body pt-0">
                            <h2 class="fw-bold">${{ number_format($user->balance) }}</h2>

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
                            <h2 class="fw-bold">${{ number_format($totalActiveInvestment, 2) }}</h2>

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
                                                class="fw-semibold">${{ number_format($totalActiveInvestment, 2) }}</span>
                                        </h4>
                                    </div>
                                    <div class="col-md col-6">
                                        <p class="text-muted mt-3 mb-1">Total Investment</p>
                                        <h4 class="mb-3">
                                            <span class="fw-semibold">${{ number_format($totalInvestment, 2) }}</span>
                                        </h4>
                                    </div>
                                    <div class="col-md col-6">
                                        <p class="text-muted mt-3 mb-1">Daily ROI</p>
                                        <h4 class="mb-3">
                                            <span class="fw-semibold">${{ number_format($totalDailyRoi, 2) }}</span>
                                        </h4>
                                    </div>
                                    <div class="col-md col-6">
                                        <p class="text-muted mt-3 mb-1">Lifetime Profit</p>
                                        <h4 class="mb-3">
                                            <span class="fw-semibold">${{ number_format($lifetimeProfit, 2) }}</span>
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
        </div> <!-- end col -->

    </div> <!-- end row -->

</x-layouts.app>
