<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;


Route::get('/',[PagesController::class, 'home'])->name('pages.home');
Route::prefix('Ida')->group(function(){
    Route::get('news',[PagesController::class, 'news'])->name('pages.news');
    Route::get('/donation/IDA', [PagesController::class, 'donation'])->name('pages.donation');
    Route::get('news/history',[PagesController::class, 'newsHistory'])->name('pages.newsHistory');
});

Route::prefix('admin')->group(function () {
        // Routes pour l'authentification
    Route::get('/register', [AdminController::class, 'register'])->name('admin.register');
    Route::post('/register', [AdminController::class, 'handleRegister'])->name('admin.handleRegister');
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'handleLogin'])->name('admin.handleLogin');
});

Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    
