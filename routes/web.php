<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Homepage */
Route::get('/', [Controller::class, 'index'])->name('home');

/* Dashboard */
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

/* Tasks */
Route::prefix('tasks')->name('tasks.')->group( function () {
    Route::get('/', [TaskController::class, 'show'])->name('show');
    Route::get('/create', [TaskController::class, 'create'])->name('create');
    Route::post('/store', [TaskController::class, 'store'])->name('store');
    Route::get('/edit', [TaskController::class, 'edit'])->name('edit');
    Route::put('/update', [TaskController::class, 'update'])->name('update');
});

/* Users */
Route::prefix('users')->name('users.')->group( function () {
    Route::get('/', [UserController::class, 'show'])->name('show');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('/update', [UserController::class, 'update'])->name('update');
});

/* Teams */
Route::prefix('teams')->name('teams.')->group( function () {
    Route::get('/', [TeamController::class, 'show'])->name('show');
    Route::get('/create', [TeamController::class, 'create'])->name('create');
    Route::post('/store', [TeamController::class, 'store'])->name('store');
    Route::get('/edit', [TeamController::class, 'edit'])->name('edit');
    Route::put('/update', [TeamController::class, 'update'])->name('update');
});
