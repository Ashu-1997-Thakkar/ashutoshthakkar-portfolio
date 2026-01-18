<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\CertificatesController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Portfolio Website Routes
|--------------------------------------------------------------------------
*/

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Page
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Skills Page
Route::get('/skills', [SkillsController::class, 'index'])->name('skills');

// Experience Page
Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');

// Projects Page
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');

// Education Page
Route::get('/education', [EducationController::class, 'index'])->name('education');

// Certificates Page
Route::get('/certificates', [CertificatesController::class, 'index'])->name('certificates');

// Services Page
Route::get('/services', [ServicesController::class, 'index'])->name('services');

// Contact Page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
