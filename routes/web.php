<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tentang', function () {
    return view('profile');
})->name('profile');

Route::get('/fasilitas', function () {
    return view('facilities');
})->name('facilities');

Route::get('/fasilitas/detail', function () {
    return view('lablist');
})->name('labdetail');

Route::get('/berita', function () {
    return view('news');
})->name('news');

Route::get('/berita/detail', function () {
    return view('news-detail');
})->name('news_detail');

Route::get('/pengujian', function () {
    return view('testing');
})->name('testing');

Route::get('/penelitian', function () {
    return view('research');
})->name('research');
