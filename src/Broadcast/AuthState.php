<?php

namespace Tupy\AuthenticationLog\Broadcast;

use Tupy\AuthenticationLog\Events\AuthSessionBegins;
use Auth;

class AuthState
{
    /**
     * broadcast user auth session available
     */
    public static function sessionAvailable()
    {
        broadcast(new AuthSessionBegins(Auth::id()));
    }
}