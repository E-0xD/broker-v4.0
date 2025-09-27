<x-layouts.app>

    <x-layouts.app.breadcrum title="Investment Opportunities" :breadcrums="['Investments', 'Investment Plans']" />

    <div class="row justify-content-center">
        <div class="col-xxl-9">

            <!-- Pricing Title-->
            <div class="text-center">
                <h3 class="mb-2">Strategic Investment Plans</h3>
                <p class="text-muted w-50 m-auto">
                    Discover our carefully curated investment plans designed to maximize your returns while managing risk. 
                    Choose the plan that aligns with your financial goals and investment strategy.
                </p>
            </div>

            <!-- Plans -->
            <div class="row mt-sm-5 align-items-center justify-content-center mt-3 mb-3">

                @foreach ($plans as $plan)
                    <div class="col-lg-6">
                        <div class="card card-pricing">
                            <div class="card-body p-4">
                                <h3 class=" fw-semibold">{{ $plan->title }}</h3>
                                <p class="fs-5 text-muted">{{ $plan->subtitle }}</p>
                                <div class="price">
                                    <h1 class="display-5  fw-bold">
                                        {{ $plan->daily_percentage }}<span class="fs-4">%</span> <span
                                            class="text-body-tertiary fs-4 fw-medium">Daily</span>
                                    </h1>
                                </div>

                                <div class="row justify-content-between align-items-center mt-3">
                                    <div class="col-12">
                                        <p class="fs-5 mb-1">- Minimum Investment : {{Auth::user()->currency .' '. $plan->min_investment }}</p>
                                        <p class="fs-5 mb-0">- Maximum Investment : {{Auth::user()->currency .' '. $plan->max_investment }}</p>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    @foreach ($plan->benefits as $benefit)
                                        <div class="col-lg-6">
                                            <ul class="d-flex flex-column gap-2 list-unstyled fs-16">
                                                <li>
                                                    <i
                                                        class="ti ti-circle-check-filled text-primary fs-4 align-middle me-1"></i>
                                                    {{ $benefit }}
                                                </li>
                                            </ul>
                                        </div>
                                    @endforeach

                                </div>

                                <form method="post" action="{{ route('investment.store') }}"
                                    class="row justify-content-between align-items-center mt-3">
                                    @csrf
                                    <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                                    <div class="col-12">
                                        <h5 class="mb-3">Amount in {{Auth::user()->currency}}</h5>
                                        <div class="form-floating mb-3">
                                            <input value="{{ old('amount') }}" type="number" name="amount"
                                                class="form-control" id="floatingInput" placeholder="1000000">
                                            <label for="floatingInput">Amount</label>
                                            @error('amount')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <div class="price-btn">
                                            <button type="submit" class="btn btn-primary">Invest</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- end Pricing_card -->
                    </div> <!-- end col -->
                @endforeach
            </div>
            <!-- end -->
        </div> <!-- end col-->
    </div>
    <!-- end row -->

</x-layouts.app>
