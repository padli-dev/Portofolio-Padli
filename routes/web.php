<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [PortfolioController::class, 'dashboard'])->name('dashboard');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');
Route::get('/experience', [PortfolioController::class, 'experience'])->name('experience');

Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

