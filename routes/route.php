<?php

use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Support\Facades\Route;
use JobMetric\Selora\Http\Controllers\SeloraController;

/*
|--------------------------------------------------------------------------
| Laravel Media Routes
|--------------------------------------------------------------------------
|
| All Route in Laravel Selora package
|
*/

// media
Route::prefix('selora')->name('selora.')->namespace('JobMetric\Selora\Http\Controllers')->group(function () {
    Route::middleware([
        SubstituteBindings::class
    ])->group(function () {
        Route::get('/', [SeloraController::class, 'index'])->name('index');
    });
});
