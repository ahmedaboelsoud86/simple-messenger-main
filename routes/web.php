<?php

use Illuminate\Support\Facades\Route;
use App\Events\Test;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/chats', function () {
    return view('home');
})->middleware('auth');



Route::get('/home', function () {
    return view('home');
})->middleware('auth');
