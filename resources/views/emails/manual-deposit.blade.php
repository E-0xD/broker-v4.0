
# New Manual Deposit Request

A new manual deposit request has been submitted:

**Amount:** {{ number_format($transaction->amount, 2) }}
**Transaction ID:** {{ $transaction->transaction_id }}
**User:** {{ $transaction->user->name }}

<a href="{{route(''admin.deposits.show'')}}">
View Deposit
</a>

Thanks,<br>
{{ config('app.name') }}
