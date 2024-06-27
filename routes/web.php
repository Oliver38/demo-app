<?php

use Illuminate\Support\Facades\Route;
use App\Models\Services;

Route::get('/', function () {

    $services = Services::All();
    return view('website.main' ,compact('services'));
});

Route::get('/welcome', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/service', [App\Http\Controllers\ServiceController::class, 'index'])->name('home');
Route::post('/addservice', [App\Http\Controllers\ServiceController::class, 'create'])->name('create');
