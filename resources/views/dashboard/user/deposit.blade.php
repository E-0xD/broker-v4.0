<x-layouts.app>
    <x-layouts.app.breadcrum title="Fund Your Account" :breadcrums="['Finances', 'Deposit Funds']" />

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Secure Fund Deposit</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        To begin trading and investing, please specify the amount you wish to deposit into your account. Your funds will be securely processed and credited to your balance immediately upon confirmation.
                    </p>
                    <div class="row">
                        <form action="{{ $depositSettings->is_manual_deposit ? route('deposit.manual.store') : route('deposit.store') }}" 
                              method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <h5 class="mb-3">Amount in {{ Auth::user()->currency }}</h5>
                                <div class="form-floating mb-3">
                                    <input value="{{old("amount")}}" type="number" name="amount" class="form-control" id="floatingInput"
                                        placeholder="1000000">
                                    <label for="floatingInput">Amount</label>
                                    @error('amount')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                @if($depositSettings->is_manual_deposit)
                                    <div class="mt-4">
                                        <h5 class="mb-3">Manual Deposit Details</h5>
                                        <div class="alert alert-info">
                                            <h6 class="mb-2">Deposit Instructions:</h6>
                                            <p>{{ $depositSettings->deposit_instructions }}</p>
                                            
                                            <h6 class="mb-2 mt-3">Deposit Address ({{ $depositSettings->deposit_currency }}):</h6>
                                            <div class="bg-light p-2 rounded">
                                                <code class="text-dark">{{ $depositSettings->deposit_address }}</code>
                                            </div>
                                        </div>

                                        <div class="form-floating mb-3 mt-4">
                                            <input type="text" name="transaction_id" class="form-control" id="transactionId"
                                                placeholder="Transaction ID" >
                                            <label for="transactionId">Transaction ID/Hash</label>
                                            @error('transaction_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Proof of Payment</label>
                                            <input type="file" name="payment_proof" class="form-control" accept="image/*" >
                                            @error('payment_proof')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                @endif

                            </div>

                            <button type="submit" class="w-100 btn btn-primary btn-sm">Deposit</button>
                        </form>

                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

</x-layouts.app>
