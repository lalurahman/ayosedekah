<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('project')
    ->name('project.')
    ->group(function () {
        Route::get('/', [ProjectController::class, 'index'])->name('index');
        Route::get('/{slug}', [ProjectController::class, 'show'])->name('show');
        Route::get('/{slug}/donate', [ProjectController::class, 'donate'])->name('donate');
    });
