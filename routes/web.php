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
    $links = config('link');
    $comics = config('comics');
    return view('welcome', compact('links', 'comics'));
})->name('home');

Route::get('/comics', function () {
    $links = config('link');
    $comics = config('comics');
    return view('comics', compact('links', 'comics'));
})->name('comics');
