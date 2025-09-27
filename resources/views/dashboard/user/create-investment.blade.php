<x-layouts.app>

    <x-layouts.app.breadcrum title="Start Investing" :breadcrums="['Investments', 'New Investment']" />

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Initialize Your Investment</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        Begin your investment journey by selecting your preferred investment plan and specifying your investment amount. Our platform ensures secure and efficient processing of your investment to maximize your potential returns.
                    </p>
                    <div class="row">
                        <form action="{{ route('investment.store') }}" method="post">
                            @csrf

                            <div class="col-12">
                                <div class="mb-3">
                                    <h5 class="">Investment Plan</h5>
                                    <select name="plan_id" class="form-control">
                                        @foreach ($plans as $plan)
                                            <option value="{{ $plan->id }}">
                                                {{ ucfirst($plan->title) }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('plan_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <h5 class="">Amount in {{Auth::user()->currency}}</h5>
                                <div class="form-floating mb-3">
                                    <input value="{{ old('amount') }}" type="number" name="amount"
                                        class="form-control" id="floatingAmount" placeholder="Enter amount">
                                    <label for="floatingAmount">Amount</label>
                                    @error('amount')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="w-100 btn btn-primary btn-sm">Invest</button>
                        </form>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->
</x-layouts.app>
