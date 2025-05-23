<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FacilityController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tentang', [AboutController::class, 'index'])->name('profile');

Route::get('/fasilitas', [FacilityController::class, 'index'])->name('facilities');
Route::get('/fasilitas/{slug}', [FacilityController::class, 'show'])->name('facilities.detail');

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
