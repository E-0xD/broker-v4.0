<x-layouts.app>
    <x-layouts.app.breadcrum title="Manage Administrators" :breadcrums="['Master', 'Admins', 'List']" />

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed">
                    <h4 class="header-title">Administrator Management</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admins as $admin)
                                    <tr>
                                        <td>{{ $admin->name }}</td>
                                        <td>{{ $admin->email }}</td>
                                        <td><span class="badge bg-primary">{{ ucfirst($admin->role) }}</span></td>
                                        <td>
                                            <span class="badge bag-primary">
                                                {{ $admin->status }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('master.admins.show', $admin) }}" 
                                               class="btn btn-info btn-sm">Manage Admin</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>