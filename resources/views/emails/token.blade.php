@component('mail::message')
# Introduction

We recieved a request to transfer funds from your account.

Use **{{$token}}** to authorize the transfer.

Please do not share this token with anybody.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
