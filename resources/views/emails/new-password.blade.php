@component('mail::message')
## Hello {{$user->name}},

We received a request to change the password of your account **({{$user->email}})**.

Your new automatically generated password is: **{{$password}}**

Use the password to login and change your account password to your prefered password.

@component('mail::button', ['url' => route('login')])
Login
@endcomponent

<hr>

_**Note:** Do not disclose your account password to anybody as this will put your account at risk._

Thanks,<br>
{{ config('app.name') }}
@endcomponent
