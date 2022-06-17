<?php

use App\Http\Controllers\Admin\{
	AdminController,
    UserController
};
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
	//Admins routes
	Route::resource('/admins', AdminController::class);
	Route::put('/admins/{id}/update-image', [AdminController::class, 'uploadFile'])->name('admins.update.image');
	Route::get('/admins/{id}/image', [AdminController::class, 'changeImage'])->name('admins.change.image');

	// Users routes
	Route::put('/users/{id}/update-image', [UserController::class, 'uploadFile'])->name('users.update.image');
	Route::get('/users/{id}/image', [UserController::class, 'changeImage'])->name('users.change.image');
	Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
	Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
	Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
	Route::post('/users', [UserController::class, 'store'])->name('users.store');
	Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
	Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
	Route::get('/users', [UserController::class, 'index'])->name('users.index');

	Route::get('/', [DashboardController::class, 'index'])->name('admin.home');
});

Route::get('/', function () {
    return view('welcome');
});
