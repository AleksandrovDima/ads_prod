<?php


use App\Http\Controllers\Ad\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('main');

Route::prefix('admin')
    ->middleware('admin')
    ->group(function()
    {
        Route::get('/ad', [IndexController::class, '__invoke'])->name('admin.ad.index');

    });

Route::namespace('App\Http\Controllers\User')->prefix('ads')->group(function () {
    Route::get('/user', 'AdController')->name('user.index');
});


Route::namespace('App\Http\Controllers\Ad')->prefix('ads')->group(function () {
    Route::get('/', 'IndexController')->name('ad.index');
    Route::get('/{ad}/show', 'ShowController')->name('ad.show');

    Route::middleware('auth')->group(function () {
    Route::get('/create', 'CreateController')->name('ad.create');
    Route::post('/', 'StoreController')->name('ad.store');
    Route::get('/{ad}/edit', 'EditController')->name('ad.edit');
    Route::patch('/{ad}', 'UpdateController')->name('ad.update');
    Route::delete('/{ad}', 'DestroyController')->name('ad.delete');
    });
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

