@component('mail::message')
# Olá!

Sua conta no aplicativo {{ config('app.name') }} foi conectado por um novo dispositivo.

> **Conta:** {{ $account->email }}<br>
> **Hora:** {{ $time->toCookieString() }}<br>
> **IP de acesso:** {{ $ipAddress }}<br>
> **Browser:** {{ $browser }}

Se você não reconhece este acesso, altere sua senha.

Obrigado,<br>{{ config('app.name') }}
@endcomponent
