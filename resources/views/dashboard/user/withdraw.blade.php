<x-layouts.app>

    <x-layouts.app.breadcrum title="Withdrawal" :breadcrums="['Withdraw', 'Create']" />

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Make a Withdrawal</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        Please fill out the form below to make a withdrawal.
                    </p>
                    <div class="row">
                        <form action="{{ route('withdraw.store') }}" method="post">
                            @csrf

                            <div class="col-12">
                                <div class="mb-3">
                                    <h5 class="">Cryptocurrency</h5>
                                    <select name="crypto" class="form-control">
                                        @foreach (\App\Enums\WithdrawalOption::cases() as $withdrawalOption)
                                            <option value="{{ $withdrawalOption->value }}">
                                                {{ ucfirst($withdrawalOption->value) }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('crypto')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <h5 class="">Withdrawal Address</h5>
                                <div class="form-floating mb-3">
                                    <input value="{{ old('address') }}" type="text" name="address"
                                        class="form-control" id="floatingAddress"
                                        placeholder="Enter your wallet address">
                                    <label for="floatingAddress">Wallet Address</label>
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <h5 class="">Amount in USD</h5>
                                <div class="form-floating mb-3">
                                    <input value="{{ old('amount') }}" type="number" name="amount"
                                        class="form-control" id="floatingAmount" placeholder="Enter amount">
                                    <label for="floatingAmount">Amount</label>
                                    @error('amount')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="w-100 btn btn-primary btn-sm">Withdraw</button>
                        </form>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->
</x-layouts.app>
