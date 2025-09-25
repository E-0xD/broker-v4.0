
# New Manual Deposit Request

A new manual deposit request has been submitted:

**User:** {{ $deposit->user->name }}
**Amount:** {{ $deposit->amount }}
**Date:** {{ $deposit->created_at->format('Y-m-d H:i:s') }}

You can review and approve/reject this deposit in the admin dashboard.

<a href="{{route(''admin.deposits.show'')}}">
View Deposit
</a>

Thanks,<br>
{{ config('app.name') }}
