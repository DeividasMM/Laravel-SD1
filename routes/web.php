<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ConferenceController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/client/conferences', [ClientController::class, 'index'])->name('client.conferences');
Route::get('/client/conference/{id}', [ClientController::class, 'show'])->name('client.conference.show');
Route::post('/client/register', [ClientController::class, 'register'])->name('client.register');

Route::get('/employee/conferences', [EmployeeController::class, 'index'])->name('employee.conferences');
Route::get('/employee/conference/{id}', [EmployeeController::class, 'show'])->name('employee.conference.show');

Route::get('/admin', [UserController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
Route::get('/admin/users/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
Route::post('/admin/users/update/{id}', [UserController::class, 'update'])->name('admin.users.update');

Route::get('/admin/conferences', [ConferenceController::class, 'index'])->name('admin.conferences');
Route::get('/admin/conferences/create', [ConferenceController::class, 'create'])->name('admin.conferences.create');
Route::post('/admin/conferences/store', [ConferenceController::class, 'store'])->name('admin.conferences.store');
Route::get('/admin/conferences/edit/{id}', [ConferenceController::class, 'edit'])->name('admin.conferences.edit');
Route::post('/admin/conferences/update/{id}', [ConferenceController::class, 'update'])->name('admin.conferences.update');
Route::post('/admin/conferences/delete/{id}', [ConferenceController::class, 'delete'])->name('admin.conferences.delete');
