<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::resource('permissions', App\Http\Controllers\PermissionController::class);

Route::resource('roles', App\Http\Controllers\RoleController::class);
//assign permission to role
Route::get('roles/{role}/assign-permission', [App\Http\Controllers\RoleController::class, 'assignPermission'])->name('roles.assign-permission');
//process assign permission to role
Route::put('roles/{role}/assign-permission', [App\Http\Controllers\RoleController::class, 'processAssignPermission'])->name('roles.process-assign-permission');


// user Route
Route::resource('users', App\Http\Controllers\UserController::class);
//assign role to user
Route::get('users/{user}/assign-role', [App\Http\Controllers\UserController::class, 'assignRole'])->name('users.assign-role');

require __DIR__.'/auth.php';
