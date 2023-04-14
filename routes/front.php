<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;

Route::get('', [FrontController::class, 'index'])->name('index');
Route::get('about', [FrontController::class, 'about'])->name('about');
Route::get('contact', [FrontController::class, 'contact'])->name('contact');
Route::get('help', [FrontController::class, 'help'])->name('help');
