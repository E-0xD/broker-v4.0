<x-layouts.app>
    <x-layouts.app.breadcrum title="Transaction History" :breadcrums="['Transaction', 'History']" />

    @if ($transactions->count() > 0)
        <div class="row table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Transaction Id</th>
                        <th scope="col">Type</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr>
                            <th scope="row">{{ $transaction->transaction_id }}</th>
                            <td>{{ $transaction->type }}</td>
                            <td>{{ $transaction->amount }}</td>
                            <td
                                class="
                                @switch($transaction->status->value)
                                    @case('pending')
                                        bg-warning
                                        @break
                                    @case('completed')
                                        bg-success text-white
                                        @break
                                    @case('failed')
                                        bg-danger text-white
                                        @break
                                    @default
                                        bg-secondary text-white
                                @endswitch
                            ">
                                {{ ucfirst($transaction->status->value) }}
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    @else
        <div class="container text-center fs-2">
            No transactions yet, start your first one today!
        </div>
    @endif
</x-layouts.app>
