<?php

use Illuminate\Support\Facades\Route;
use JobMetric\Numi\Http\Controllers\NumiController;

/*
|--------------------------------------------------------------------------
| Laravel Numi Panel Routes
|--------------------------------------------------------------------------
|
| All Route in Laravel Numi panel package
|
*/

// route numi panel
Route::name('numi.')->namespace('JobMetric\Numi\Http\Controllers')->group(function () {
    Route::get('/', [NumiController::class, 'index'])->name('dashboard');
});
