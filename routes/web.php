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
    $comics = config('db.comics');

    return view('home', compact('comics'));
})->name('home');

Route::get('/characters', function () {

    return ('Characters Page');
})->name('characters');

Route::get('/comics', function () {

    return ('Comics Page');
})->name('comics');

Route::get('/movies', function () {

    return ('Movies Page');
})->name('movies');

Route::get('/tv', function () {

    return ('TV Page');
})->name('tv');

Route::get('/games', function () {

    return ('Games Page');
})->name('games');

Route::get('/collectibles', function () {

    return ('Collectibles Page');
})->name('collectibles');

Route::get('/videos', function () {

    return ('Videos Page');
})->name('videos');

Route::get('/fans', function () {

    return ('Fans Page');
})->name('fans');

Route::get('/news', function () {

    return ('News Page');
})->name('news');

Route::get('/shop', function () {

    return ('Shop Page');
})->name('shop');
