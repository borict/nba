<?php

use App\Http\Controllers\PlayersController;
use App\Http\Controllers\TeamsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TeamsController::class, 'index'])->name('all-teams');

Route::get('/teams/{id}', [TeamsController::class, 'show'])->name('single-team');

Route::get('/players/{id}', [PlayersController::class, 'show'])->name('single-player');

