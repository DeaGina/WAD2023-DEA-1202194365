<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('showroom',[MobilController::class, 'index'])->name('showroom.index');
Route::get('showroom/create',[MobilController::class, 'create'])->name('showroom.create');
Route::post('showroom/store',[MobilController::class, 'store'])->name('showroom.store');