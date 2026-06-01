<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JokeController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', [PortfolioController::class, 'dashboard'])->name('dashboard');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');
Route::get('/experience', [PortfolioController::class, 'experience'])->name('experience');

Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

// Joke Generator Routes
Route::get('/joke', [JokeController::class, 'showJokePage'])->name('joke.page');
Route::get('/api/joke/random', [JokeController::class, 'getRandomJoke'])->name('joke.random');
Route::get('/api/joke/type/{type}', [JokeController::class, 'getJokeByType'])->name('joke.by-type');
