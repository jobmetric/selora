<?php

use Illuminate\Support\Facades\Route;
use JobMetric\Selora\Http\Controllers\SeloraController;

/*
|--------------------------------------------------------------------------
| Laravel Selora Panel Routes
|--------------------------------------------------------------------------
|
| All Route in Laravel Selora panel package
|
*/

// route selora panel
Route::name('selora.')->namespace('JobMetric\Selora\Http\Controllers')->group(function () {
    Route::get('/', [SeloraController::class, 'index'])->name('dashboard');
});
