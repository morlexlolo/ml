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
    return view('welcome');
})->name('home');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/contact-ml-godi', function () {
    return view('page.contact');
})->name('contact.index');
Route::get('/videos', function () {
    return view('page.video');
})->name('video.index');
Route::get('/musics', function () {
    return view('page.music');
})->name('music.index');
Route::get('/gallery', function () {
    return view('page.photo');
})->name('photo.index');
Route::get('/about-ml-godi', function () {
    return view('page.about');
})->name('about.index');
