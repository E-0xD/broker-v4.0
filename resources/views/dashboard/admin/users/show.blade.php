<x-layouts.app>
    <x-layouts.app.breadcrum title="User Details" :breadcrums="['Admin', 'Users', 'Details']" />

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed">
                    <h4 class="header-title">User Information</h4>
                </div>

                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5>Personal Information</h5>
                            <p><strong>Name:</strong> {{ $user->name }}</p>
                            <p><strong>Email:</strong> {{ $user->email }}</p>
                            <p><strong>Joined:</strong> {{ $user->created_at->format('M d, Y') }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Account Information</h5>
                            <p><strong>Current Balance:</strong> {{$user->currency .' '. number_format($user->balance) }}</p>

                        </div>
                    </div>

                    <div class="row">
                          <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Update User Status</h5>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('admin.users.update-status', $user) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label class="form-label">User Status</label>
                                            <select name="status" class="form-control" required>
                                                @foreach (\App\Enums\UserStatus::cases() as $status)
                                                    <option value="{{ $status->value }}" 
                                                            {{ $user->status === $status ? 'selected' : '' }}
                                                            >
                                                        {{ $status->label() }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('status')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Status</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Update Balance</h5>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('admin.users.update-balance', $user) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label class="form-label">New Balance (USD)</label>
                                            <input type="number" name="balance" class="form-control" 
                                                   value="{{ $user->balance }}" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Balance</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>