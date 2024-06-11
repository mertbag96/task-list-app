<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Panel\AccountController;
use App\Http\Controllers\Panel\DashboardController;
use App\Http\Controllers\Panel\TaskController;
use App\Http\Controllers\Panel\TeamController;
use App\Http\Controllers\Panel\UserController;
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

/* Authentication */
Route::prefix('auth')->name('auth.')->group( function () {
    Route::middleware('guest')->group( function () {
        Route::get('/sign-in', [AuthController::class, 'sign_in'])->name('sign-in');
        Route::post('/log-in', [AuthController::class, 'log_in'])->name('log-in');
        Route::get('/sign-up', [AuthController::class, 'sign_up'])->name('sign-up');
        Route::post('/register', [AuthController::class, 'register'])->name('register');
        Route::get('/forget-password', [AuthController::class, 'forget_password'])->name('forget-password');
        Route::post('/reset-password', [AuthController::class, 'reset_password'])->name('reset-password');
    });
    Route::post('/log-out', [AuthController::class, 'log_out'])->name('log-out');
});

/* Website */
Route::get('/', [Controller::class, 'home'])->name('home');
Route::get('/features', [Controller::class, 'features'])->name('features');
Route::get('/help-center/{slug?}', [Controller::class, 'help_center'])->name('help-center');
Route::get('/about', [Controller::class, 'about'])->name('about');
Route::get('/blog/{slug?}', [Controller::class, 'blog'])->name('blog');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::post('/contact-us', [Controller::class, 'contact_us'])->name('contact-us');
Route::get('/terms', [Controller::class, 'terms'])->name('terms');
Route::get('/privacy', [Controller::class, 'privacy'])->name('privacy');
Route::get('/security', [Controller::class, 'security'])->name('security');

/* Panel */
Route::middleware('auth')->prefix('panel')->name('panel.')->group( function () {
    /* Index */
    Route::get('/', function () {
        return redirect()->route('panel.dashboard');
    });
    /* Account */
    Route::prefix('account')->name('account.')->group( function () {
        Route::get('/profile', [AccountController::class, 'profile'])->name('profile');
        Route::put('/update-profile', [AccountController::class, 'update_profile'])->name('update-profile');
        Route::put('/change-password', [AccountController::class, 'change_password'])->name('change-password');
        Route::put('/update-avatar', [AccountController::class, 'update_avatar'])->name('update-avatar');
        Route::get('/messages', [AccountController::class, 'messages'])->name('messages');
        Route::get('/notifications', [AccountController::class, 'notifications'])->name('notifications');
    });
    /* Dashboard */
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    /* Users */
    Route::prefix('users')->name('users.')->group( function () {
        Route::get('/', [UserController::class, 'show'])->name('show');
        Route::get('/get-users', [UserController::class, 'get_users'])->name('get-users');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
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
    /* Tasks */
    Route::prefix('tasks')->name('tasks.')->group( function () {
        Route::get('/', [TaskController::class, 'show'])->name('show');
        Route::get('/create', [TaskController::class, 'create'])->name('create');
        Route::post('/store', [TaskController::class, 'store'])->name('store');
        Route::get('/edit', [TaskController::class, 'edit'])->name('edit');
        Route::put('/update', [TaskController::class, 'update'])->name('update');
    });
});
