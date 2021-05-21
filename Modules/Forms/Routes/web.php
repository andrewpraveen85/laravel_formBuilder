<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('forms')->group(function() {
    Route::get('/', 'FormsController@index');
});

Route::prefix('create')->group(function() {
    Route::get('/', 'FormsController@create');
});

Route::prefix('store')->group(function() {
    Route::post('/', 'FormsController@store');
});

Route::prefix('show')->group(function() {
    Route::get('/', 'FormsController@show');
});

Route::prefix('read')->group(function() {
    Route::get('/', 'FormsController@read');
});

Route::prefix('edit')->group(function() {
    Route::get('/', 'FormsController@edit');
});

Route::prefix('update')->group(function() {
    Route::post('/', 'FormsController@update');
});

Route::prefix('destroy')->group(function() {
    Route::delete('/', 'FormsController@destroy');
});

Route::get('forms', [Modules\Forms\Http\Controllers\FormsController::class, 'index'])->name('forms')->middleware('auth');
Route::get('create', [Modules\Forms\Http\Controllers\FormsController::class, 'create'])->name('create')->middleware('auth');
Route::post('store', [Modules\Forms\Http\Controllers\FormsController::class, 'store'])->name('store')->middleware('auth');
Route::get('show/{id}', [Modules\Forms\Http\Controllers\FormsController::class, 'show'])->name('show')->middleware('auth');
Route::get('edit/{id}', [Modules\Forms\Http\Controllers\FormsController::class, 'edit'])->name('edit')->middleware('auth');
Route::post('update/{id}', [Modules\Forms\Http\Controllers\FormsController::class, 'update'])->name('update')->middleware('auth');
Route::delete('destroy/{id}', [Modules\Forms\Http\Controllers\FormsController::class, 'destroy'])->name('destroy')->middleware('auth');
Route::get('read/{id}', [Modules\Forms\Http\Controllers\FormsController::class, 'read'])->name('read')->middleware('auth');
