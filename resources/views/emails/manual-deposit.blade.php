<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>

    <body>
        <h2> New Manual Deposit Request</h2>

        A new manual deposit request has been submitted:
        <br>

        <b>Amount:</b> {{ number_format($transaction->amount, 2) }}
        <b>Transaction ID:</b> {{ $transaction->transaction_id }}
        <b>User:</b> {{ $transaction->user->name }}

        Thanks,<br>
        {{ config('app.name') }}

    </body>

</html>
