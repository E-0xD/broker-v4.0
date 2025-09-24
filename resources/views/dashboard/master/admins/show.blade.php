<x-layouts.app>
    <x-layouts.app.breadcrum title="Administrator Details" :breadcrums="['Master', 'Admins', 'Details']" />

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed">
                    <h4 class="header-title">Administrator Information</h4>
                </div>

                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5>Personal Information</h5>
                            <p><strong>Name:</strong> {{ $admin->name }}</p>
                            <p><strong>Email:</strong> {{ $admin->email }}</p>
                            <p><strong>Joined:</strong> {{ $admin->created_at->format('M d, Y') }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Account Information</h5>
                            <p><strong>Current Role:</strong> 
                                <span class="badge bg-primary">{{ ucfirst($admin->role) }}</span>
                            </p>
                            <p><strong>Current Status:</strong> 
                                <span class="badge bg-{{ $admin->status }}">
                                    {{ $admin->status }}
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Update Role</h5>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('master.admins.update-role', $admin) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label class="form-label">Role</label>
                                            <select name="role" class="form-control" required>
                                                <option value="{{ \App\Enums\UserRole::ADMIN->value }}"
                                                    {{ $admin->role === \App\Enums\UserRole::ADMIN ? 'selected' : '' }}>
                                                    Administrator
                                                </option>
                                                <option value="{{ \App\Enums\UserRole::USER->value }}"
                                                    {{ $admin->role === \App\Enums\UserRole::USER ? 'selected' : '' }}>
                                                    Regular User
                                                </option>
                                            </select>
                                            @error('role')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Role</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Update Status</h5>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('master.admins.update-status', $admin) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label class="form-label">Account Status</label>
                                            <select name="status" class="form-control" required>
                                                @foreach (\App\Enums\UserStatus::cases() as $status)
                                                    <option value="{{ $status->value }}" 
                                                            {{ $admin->status === $status ? 'selected' : '' }}
                                                            class="text-{{ $status }}">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>