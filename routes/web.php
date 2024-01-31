<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
Use App\Http\Controllers\CategoryController;
Use App\Http\Controllers\LessonController;
Use App\Http\Controllers\RoleController;

//No Auth Routes
Route::get('/', [DashboardController::class, 'index']);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    //Auth Routes
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/lessons', LessonController::class);
    Route::resource('/roles', RoleController::class);
});
