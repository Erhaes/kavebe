<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang', function () {
    return view('profile');
})->name('profile');

Route::get('/fasilitas', function () {
    return view('facilities');
})->name('facilities');

Route::get('/berita', function () {
    return view('news');
})->name('news');

Route::get('/berita/detail', function () {
    return view('news-detail');
})->name('news_detail');
