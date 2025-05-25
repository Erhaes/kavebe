<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FacilityController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tentang', [AboutController::class, 'index'])->name('profile');

Route::get('/fasilitas', [FacilityController::class, 'index'])->name('facilities');
Route::get('/fasilitas/{slug}', [FacilityController::class, 'show'])->name('facilities.detail');

Route::get('/berita', [App\Http\Controllers\NewsController::class, 'index'])->name('news.index');
Route::get('/berita/{slug}', [App\Http\Controllers\NewsController::class, 'show'])->name('news.show');

Route::get('/berita/detail', function () {
    return view('news-detail');
})->name('news_detail');

Route::get('/pengujian', function () {
    return view('testing');
})->name('testing');

Route::get('/penelitian', [App\Http\Controllers\ResearchController::class, 'index'])->name('research.index');
Route::get('/penelitian/{id}', [App\Http\Controllers\ResearchController::class, 'show'])->name('research.show');

Route::get('/testing', [App\Http\Controllers\TestingController::class, 'index'])->name('testing.index');
Route::get('/testing/{slug}', [App\Http\Controllers\TestingController::class, 'show'])->name('testing.show');
