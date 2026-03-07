<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/client/conferences', [ClientController::class, 'index'])->name('client.conferences');
Route::get('/client/conference/{id}', [ClientController::class, 'show'])->name('client.conference.show');
Route::post('/client/register', [ClientController::class, 'register'])->name('client.register');
