@component('mail::message')
# Dear {{$user->name}}

${{$data['amount']}} was transfered from account. Current Balance:{{$user->balance}}";

Thanks,<br>
{{ config('app.name') }}
@endcomponent
