<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TireController;

Route::controller(TireController::class)->group(function () {
    Route::get('/', 'index')->name('tireIndex');
    Route::get('/create', 'create')->name('tireCreate');
    Route::post('/store', 'store')->name('tireStore');
    Route::get('/edit', 'edit')->name('tireEdit');
    Route::put('/update', 'update')->name('tireUpdate');
    Route::delete('/destroy/{id}', 'destroy')->name(('tireDestroy'));
    Route::get('/trash', 'trash')->name(('tireTrash'));
    Route::post('/restore/{id}', 'restore')->name(('tireRestore'));
});