<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AssessmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/pathway', [PageController::class, 'pathway'])->name('pathway');
Route::get('/programs', [PageController::class, 'programs'])->name('programs');
Route::get('/impact', [PageController::class, 'impact'])->name('impact');
Route::get('/stories', [PageController::class, 'stories'])->name('stories');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Assessment Routes
Route::prefix('assessment')->name('assessment.')->group(function () {
    Route::get('/', [AssessmentController::class, 'index'])->name('index');
    Route::match(['GET', 'POST'], '/start', [AssessmentController::class, 'start'])->name('start');
    Route::get('/question/{question}', [AssessmentController::class, 'question'])->name('question');
    Route::post('/question/{question}/answer', [AssessmentController::class, 'answer'])->name('answer');
    Route::get('/results', [AssessmentController::class, 'results'])->name('results');
    Route::post('/reset', [AssessmentController::class, 'reset'])->name('reset');
});

require __DIR__.'/auth.php';
