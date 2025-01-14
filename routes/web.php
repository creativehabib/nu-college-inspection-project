<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Permission Route
Route::resource('permissions', PermissionController::class);

// Role Route
Route::resource('roles', RoleController::class);
//assign permission to role
Route::get('roles/{role}/assign-permission', [RoleController::class, 'assignPermission'])->name('roles.assign-permission');
//process assign permission to role
Route::put('roles/{role}/assign-permission', [RoleController::class, 'processAssignPermission'])->name('roles.process-assign-permission');

// user Route
Route::resource('users', UserController::class);
//assign role to user
Route::get('users/{user}/assign-role', [UserController::class, 'assignRole'])->name('users.assign-role');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
