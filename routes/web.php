<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('home.index');
})->name('home');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::get('/dashboard', function () {
    return view('home.index');
})->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

// ruta de las vistas del prototipo
Route::get('/noticias', [NewsController::class, 'index'])->name('news.index');
Route::get('/noticias/{id}', [NewsController::class, 'show'])->name('news.show');

Route::get('/actividades', [ActivityController::class, 'index'])->name('activity.index');
Route::get('/actividades/{id}', [ActivityController::class, 'show'])->name('activity.show');

Route::get('/aprendizaje', [LearningController::class, 'index'])->name('learning.index');
Route::get('/aprendizaje/{id}', [LearningController::class, 'show'])->name('learning.show');

Route::get('/foros', [ForumController::class, 'index'])->name('forum.index');
Route::get('/foros/{id}', [ForumController::class, 'show'])->name('forum.show');

Route::get('/galeria', [GaleryController::class, 'index'])->name('galery.index');
Route::get('/galeria/{id}', [GaleryController::class, 'show'])->name('galery.show');

Route::get('/contactenos', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contactenos/{id}', [ContactController::class, 'show'])->name('contact.show');

require __DIR__.'/auth.php';
