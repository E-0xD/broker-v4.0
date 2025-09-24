<x-layouts.app>
    <x-layouts.app.breadcrum title="Deposit" :breadcrums="['Deposit', 'Create']" />

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex align-items-center">
                    <h4 class="header-title">Make a Deposit</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        short text here
                    </p>
                    <div class="row">
                        <form action="{{ route('deposit.store') }}" method="post">
                            @csrf
                            <div class="col-12">
                                <h5 class="mb-3">Amount in USD</h5>
                                <div class="form-floating mb-3">
                                    <input value="{{old("amount")}}" type="number" name="amount" class="form-control" id="floatingInput"
                                        placeholder="1000000">
                                    <label for="floatingInput">Amount</label>
                                    @error('amount')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <button type="submit" class="w-100 btn btn-primary btn-sm">Deposit</button>
                        </form>

                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

</x-layouts.app>
