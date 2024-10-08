<?php

use App\Http\Controllers\Admin\RestaurantController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// use App\Http\Middleware\AdminMiddleware;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::middleware(['auth',AdminMiddleware::class])->group(function () {
    Route::get('admin/dashboard',function (){
        return view('admin.dashboard');
    }) ->name('admin.dashboard');

    Route::controller(RestaurantController::class)->group(function () {
       Route::get('admin/restaurant', 'index')->name('admin.restaurant.index');
       Route::get('admin/restaurant/create', 'create')->name('admin.restaurant.create');
    });
});
