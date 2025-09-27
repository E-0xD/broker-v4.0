<x-layouts.app>
    <x-layouts.app.breadcrum title="Pending Deposits" :breadcrums="['Admin', 'Deposits']" />
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-centered mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Amount</th>
                                    <th>Transaction ID</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Proof</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($deposits as $deposit)
                                    <tr>
                                        <td>{{ $deposit->id }}</td>
                                        <td>{{ $deposit->user->name }}</td>
                                        <td>{{  $deposit->user->currency .' '. number_format($deposit->amount, 2) }}</td>
                                        <td>{{ $deposit->transaction_id }}</td>
                                        <td>
                                            <span
                                                class="badge bg-{{ $deposit->status === \App\Enums\TransactionStatus::COMPLETED
                                                    ? 'success'
                                                    : ($deposit->status === \App\Enums\TransactionStatus::PENDING
                                                        ? 'warning'
                                                        : 'danger') }}">
                                                {{ $deposit->status->value }}
                                            </span>
                                        </td>
                                        <td>{{ $deposit->created_at->format('M d, Y H:i') }}</td>
                                        <td>
                                            @if ($deposit->proof)
                                                <a href="{{ Storage::url($deposit->proof) }}" target="_blank"
                                                    class="btn btn-sm btn-info">
                                                    View Proof
                                                </a>
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if ($deposit->status === \App\Enums\TransactionStatus::PENDING)
                                                <form action="{{ route('admin.deposits.approve', $deposit) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    <button type="submit"
                                                        class="btn btn-sm btn-success">Approve</button>
                                                </form>
                                                <form action="{{ route('admin.deposits.reject', $deposit) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-danger">Reject</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        {{ $deposits->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>
