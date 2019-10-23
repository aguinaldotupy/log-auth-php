<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Notify New Device
    |--------------------------------------------------------------------------
    |
    | Here you define whether to receive notifications when logging from a new device.
    |
    */

    'notify' => env('AUTHENTICATION_LOG_NOTIFY', true),

    /*
    |--------------------------------------------------------------------------
    | Old Logs Clear
    |--------------------------------------------------------------------------
    |
    | When the clean-command is executed, all authentication logs older than
    | the number of days specified here will be deleted.
    |
    */

    'older' => 365,


    /*
    |--------------------------------------------------------------------------
    | seconds between auth session existance check ajax request
    |--------------------------------------------------------------------------
    |
    |
    */

    'gap_seconds' => env('GAP_SECONDS', 30),

    /*
    |--------------------------------------------------------------------------
    | whether you want to use the benefit of broadcasting
    | set true / false
    |--------------------------------------------------------------------------
    |
    |
    */
    'avail_broadcasting' => env('AVAIL_BROADCASTING', false),

];
