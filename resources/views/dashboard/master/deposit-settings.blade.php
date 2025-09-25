<x-layouts.app>
    <x-layouts.app.breadcrum title="Deposit Settings" :breadcrums="['Master', 'Settings', 'Deposit']" />

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed">
                    <h4 class="header-title">Manage Deposit Settings</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('master.deposits.settings.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-switch">
                                        <input type="hidden" name="is_manual_deposit" value="0">
                                        <input type="checkbox" class="form-check-input" name="is_manual_deposit" 
                                               id="is_manual_deposit" value="1" 
                                               {{ $settings->is_manual_deposit ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_manual_deposit">
                                            Enable Manual Deposits
                                        </label>
                                    </div>
                                    @error('is_manual_deposit')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Deposit Currency</label>
                                    <input type="text" class="form-control" name="deposit_currency"
                                           value="{{ $settings->deposit_currency }}" required>
                                    @error('deposit_currency')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Deposit Address</label>
                                    <input type="text" class="form-control" name="deposit_address"
                                           value="{{ $settings->deposit_address }}" required>
                                    @error('deposit_address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Deposit Instructions</label>
                                    <textarea class="form-control" name="deposit_instructions" rows="4" 
                                              required>{{ $settings->deposit_instructions }}</textarea>
                                    @error('deposit_instructions')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Update Settings</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
