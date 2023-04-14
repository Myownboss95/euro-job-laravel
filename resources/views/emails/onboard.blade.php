@component('mail::message')
## Dear {{ auth('user')->user()->firstname }}

Your bank account has been created successfully.

Your account number is: **{{ $account_number }}**

You can click on the button below to access your account.

@component('mail::button', ['url' => route('user.index')])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
