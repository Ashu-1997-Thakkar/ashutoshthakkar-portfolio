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
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/skills', [SkillsController::class, 'index'])->name('skills');

Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');

Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');

Route::get('/education', [EducationController::class, 'index'])->name('education');

Route::get('/certificates', [CertificatesController::class, 'index'])->name('certificates');

Route::get('/services', [ServicesController::class, 'index'])->name('services');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
