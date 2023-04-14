@component('mail::message')
## Dear {{ $user->name }},

Your account is currently {{ucfirst($user->status)}}. Please contact support.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
