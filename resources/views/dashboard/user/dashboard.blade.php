<x-layouts.app>

     <x-layouts.app.breadcrum title="Dashboard"/>


    <div class="row">
        <div class="col-xxl-9">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="d-flex card-header justify-content-between align-items-center">
                            <h4 class="header-title">Total Balance</h4>
                      
                        </div>

                        <div class="card-body pt-0">
                            <h2 class="fw-bold">${{number_format($user->balance)}}</h2>

                            <div class="row g-2 mt-2 pt-1">
                                <div class="col">
                                    <a href="{{route('deposit.create')}}" class="btn btn-primary w-100">
                                        Deposit</a>
                                </div>
                                <div class="col">
                                    <a href="{{route('withdraw.create')}}" class="btn btn-info w-100">
                                        Withdraw</a>
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
                                        <p class="text-muted mt-3 mb-1">Total Investment</p>
                                        <h4 class="mb-3">
                                            
                                            <span class="fw-semibold">$29.5k</span>
                                        </h4>
                                    </div>
                                    <div class="col-md col-6">
                                        <p class="text-muted mt-3 mb-1">Total Profit</p>
                                        <h4 class="mb-3">
                                      
                                            <span class="fw-semibold">$15.07k</span>
                                        </h4>
                                    </div>
                                    <div class="col-md col-6">
                                        <p class="text-muted mt-3 mb-1">Running Investment</p>
                                        <h4 class="mb-3">
                                         
                                            <span class="fw-semibold">$3.6k</span>
                                        </h4>
                                    </div>
                                    <div class="col-md col-6">
                                        <p class="text-muted mt-3 mb-1">Floating Profit</p>
                                        <h4 class="mb-3">
                                         
                                            <span class="fw-semibold">$6.9k</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div dir="ltr" class="p-2">
                                <div id="balance-overview" class="apex-charts" data-colors="#465dff,#6ac75a,#f9c45c">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->


    </div> <!-- end row -->


</x-layouts.app>
