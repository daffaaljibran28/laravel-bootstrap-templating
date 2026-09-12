<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('frontend.frontend');
});

Route::view('/', 'main');
Route::view('/login', 'login.login')->name('login');
Route::view('/admin', 'admin.admin')->name('admin');
Route::get('/posts', [PostController::class, 'index']); 