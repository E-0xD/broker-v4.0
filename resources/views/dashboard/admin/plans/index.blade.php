<x-layouts.app>
    <x-layouts.app.breadcrum title="Investment Plans" :breadcrums="['Admin', 'Plans', 'List']" />

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex justify-content-between align-items-center">
                    <h4 class="header-title">Manage Investment Plans</h4>
                    <a href="{{ route('admin.plans.create') }}" class="btn btn-primary btn-sm">Create New Plan</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Daily %</th>
                                    <th>Min Investment</th>
                                    <th>Max Investment</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($plans as $plan)
                                    <tr>
                                        <td>{{ $plan->title }}</td>
                                        <td>{{ $plan->daily_percentage }}%</td>
                                        <td>${{ number_format($plan->min_investment) }}</td>
                                        <td>${{ number_format($plan->max_investment) }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="{{ route('admin.plans.edit', $plan) }}" 
                                                   class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('admin.plans.destroy', $plan) }}" 
                                                      method="POST" 
                                                      onsubmit="return confirm('Are you sure?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </div>
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