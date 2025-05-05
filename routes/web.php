<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\RoleController;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Dashboard Route
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Super Admin Routes
Route::middleware(['auth', 'super-admin'])->prefix('super-admin')->name('super-admin.')->group(function () {
    Route::resource('roles', RoleController::class);
    Route::get('/admin/users', [RoleController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/{user}/edit', [RoleController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{user}', [RoleController::class, 'update'])->name('admin.users.update');
    Route::post('/admin/roles', [RoleController::class, 'storeRole'])->name('admin.roles.store');
});