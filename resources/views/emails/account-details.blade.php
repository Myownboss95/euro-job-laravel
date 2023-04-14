@component('mail::message')
## Dear {{ $user->firstname }}

Your bank account has been created successfully.

Your account number is: **{{ $account_number }}**

Your account email is: **{{$user->email}}**

Your account password is: **{{$password}}**

You can click on the button below to access your account.

@component('mail::button', ['url' => route('user.index')])
Login
@endcomponent

<hr>

**Note:** Please do not share your bank account details with anyone not even our staff as this will put your account at risk.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
