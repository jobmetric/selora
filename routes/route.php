<?php

use Illuminate\Support\Facades\Route;
use JobMetric\Selora\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Laravel Selora Routes
|--------------------------------------------------------------------------
|
| All Route in Laravel Selora package
|
*/

// route selora
Route::get('/')->name('selora.home')->uses([HomeController::class, 'home']);
