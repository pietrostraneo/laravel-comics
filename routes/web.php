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
    $banner = config('banner');
    $footerlink = config('footerlink');
    $socials = config('socials');
    return view('welcome', compact('links', 'banner', 'footerlink', 'socials'));
})->name('home');

Route::get('/characters', function () {
    $links = config('link');
    $banner = config('banner');
    $footerlink = config('footerlink');
    $socials = config('socials');
    return view('characters', compact('links', 'banner', 'footerlink', 'socials'));
})->name('characters');

Route::get('/comics', function () {
    $links = config('link');
    $comics = config('comics');
    $banner = config('banner');
    $footerlink = config('footerlink');
    $socials = config('socials');
    return view('comics', compact('links', 'comics', 'banner', 'footerlink', 'socials'));
})->name('comics');

Route::get('/movies', function () {
    $links = config('link');
    $banner = config('banner');
    $footerlink = config('footerlink');
    $socials = config('socials');
    return view('movies', compact('links', 'banner', 'footerlink', 'socials'));
})->name('movies');

Route::get('/tv', function () {
    $links = config('link');
    $banner = config('banner');
    $footerlink = config('footerlink');
    $socials = config('socials');
    return view('tv', compact('links', 'banner', 'footerlink', 'socials'));
})->name('tv');

Route::get('/games', function () {
    $links = config('link');
    $banner = config('banner');
    $footerlink = config('footerlink');
    $socials = config('socials');
    return view('games', compact('links', 'banner', 'footerlink', 'socials'));
})->name('games');

Route::get('/collectibles', function () {
    $links = config('link');
    $banner = config('banner');
    $footerlink = config('footerlink');
    $socials = config('socials');
    return view('collectibles', compact('links', 'banner', 'footerlink', 'socials'));
})->name('collectibles');

Route::get('/videos', function () {
    $links = config('link');
    $banner = config('banner');
    $footerlink = config('footerlink');
    $socials = config('socials');
    return view('videos', compact('links', 'banner', 'footerlink', 'socials'));
})->name('videos');

Route::get('/fans', function () {
    $links = config('link');
    $banner = config('banner');
    $footerlink = config('footerlink');
    $socials = config('socials');
    return view('fans', compact('links', 'banner', 'footerlink', 'socials'));
})->name('fans');

Route::get('/news', function () {
    $links = config('link');
    $banner = config('banner');
    $footerlink = config('footerlink');
    $socials = config('socials');
    return view('news', compact('links', 'banner', 'footerlink', 'socials'));
})->name('news');

Route::get('/shop', function () {
    $links = config('link');
    $banner = config('banner');
    $footerlink = config('footerlink');
    $socials = config('socials');
    return view('shop', compact('links', 'banner', 'footerlink', 'socials'));
})->name('shop');

Route::get('/comics-details/{param}', function ($id) {
    $links = config('link');
    $comics = config('comics');
    $banner = config('banner');
    $footerlink = config('footerlink');
    $socials = config('socials');

    $comic = null;
    foreach ($comics as $item) {
        if ($item['id'] == $id) {
            $comic = $item;
        }
    }

    return view('details', compact('links', 'comic', 'banner', 'footerlink', 'socials'));
})->name('details');
