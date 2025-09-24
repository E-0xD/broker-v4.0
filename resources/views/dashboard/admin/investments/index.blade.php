<x-layouts.app>
    <x-layouts.app.breadcrum title="Manage Investments" :breadcrums="['Admin', 'Investments', 'List']" />

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom border-dashed d-flex justify-content-between align-items-center">
                    <h4 class="header-title">All Investments</h4>
                    <a href="{{ route('admin.investments.create') }}" class="btn btn-primary btn-sm">Create Investment</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Plan</th>
                                    <th>Amount</th>
                                    <th>Daily ROI</th>
                                    <th>Total Earned</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($investments as $investment)
                                    <tr>
                                        <td>{{ $investment->user->name }}</td>
                                        <td>{{ $investment->plan->title }}</td>
                                        <td>${{ number_format($investment->amount) }}</td>
                                        <td>${{ number_format($investment->daily_earning, 2) }}</td>
                                        <td>${{ number_format($investment->total_earned, 2) }}</td>
                                        <td>{{ ucfirst($investment->status) }}</td>
                                        <td>
                                            <button type="button" 
                                                    class="btn btn-success btn-sm" 
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#addRoiModal{{ $investment->id }}">
                                                Add ROI
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- Add ROI Modal -->
                                    <div class="modal fade" id="addRoiModal{{ $investment->id }}" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Add ROI for {{ $investment->user->name }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <form action="{{ route('admin.investments.add-roi', $investment) }}" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label class="form-label">ROI Amount (USD)</label>
                                                            <input type="number" step="0.01" name="roi_amount" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Add ROI</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>