<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');
Route::get('/experience', [PortfolioController::class, 'experience'])->name('experience');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/education', [PortfolioController::class, 'education'])->name('education');
Route::get('/certificates', [PortfolioController::class, 'certificates'])->name('certificates');
Route::get('/services', [PortfolioController::class, 'services'])->name('services');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::post('/contact/submit', [PortfolioController::class, 'contactSubmit'])->name('contact.submit');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Home/Portfolio route (main page)
Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio'); // ADD THIS LINE

// Other pages
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');
Route::get('/experience', [PortfolioController::class, 'experience'])->name('experience');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/education', [PortfolioController::class, 'education'])->name('education');
Route::get('/certificates', [PortfolioController::class, 'certificates'])->name('certificates');
Route::get('/services', [PortfolioController::class, 'services'])->name('services');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');

// Contact form submission
Route::post('/contact/submit', [PortfolioController::class, 'contactSubmit'])->name('contact.submit');