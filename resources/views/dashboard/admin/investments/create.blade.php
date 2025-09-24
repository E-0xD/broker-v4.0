<x-layouts.app>
    <x-layouts.app.breadcrum title="Create Investment" :breadcrums="['Admin', 'Investments', 'Create']" />

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed">
                    <h4 class="header-title">Create New Investment</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.investments.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Select User</label>
                            <select name="user_id" class="form-control" required>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }} (Balance: ${{ number_format($user->balance) }})</option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Select Plan</label>
                            <select name="plan_id" class="form-control" required>
                                @foreach ($plans as $plan)
                                    <option value="{{ $plan->id }}">{{ $plan->title }} ({{ $plan->daily_percentage }}% Daily)</option>
                                @endforeach
                            </select>
                            @error('plan_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Investment Amount (USD)</label>
                            <input type="number" name="amount" class="form-control" required>
                            @error('amount')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="deduct_balance" name="deduct_balance" value="1">
                                <label class="form-check-label" for="deduct_balance">
                                    Deduct amount from user's balance
                                </label>
                            </div>
                            @error('deduct_balance')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Create Investment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>