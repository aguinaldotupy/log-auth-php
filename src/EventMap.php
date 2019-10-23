<?php

namespace Tupy\AuthenticationLog;

trait EventMap
{
    /**
     * The Authentication Log event / listener mappings.
     *
     * @var array
     */
    protected $events = [
        'Illuminate\Auth\Events\Login' => [
            'Tupy\AuthenticationLog\Listeners\LogSuccessfulLogin',
        ],

        'Illuminate\Auth\Events\Logout' => [
            'Tupy\AuthenticationLog\Listeners\LogSuccessfulLogout',
        ],
    ];
}
