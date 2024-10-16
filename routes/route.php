<?php

use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Support\Facades\Route;
use JobMetric\Numi\Http\Controllers\NumiController;

/*
|--------------------------------------------------------------------------
| Laravel Media Routes
|--------------------------------------------------------------------------
|
| All Route in Laravel Numi package
|
*/

// media
Route::prefix('numi')->name('numi.')->namespace('JobMetric\Numi\Http\Controllers')->group(function () {
    Route::middleware([
        SubstituteBindings::class
    ])->group(function () {
        Route::get('/', [NumiController::class, 'index'])->name('index');
    });
});
