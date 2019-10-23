<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Tupy\AuthenticationLog\Http\Controllers', 'middleware' => ['web']], function () {
    Route::post('/check-auth', 'AuthCheck@getStatus')->name('authentication.check_auth');
});