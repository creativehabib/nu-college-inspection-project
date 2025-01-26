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

Route::group(['middleware' => ['role:super-admin|admin']], function() {

    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::get('permissions/{permissionId}/delete', [App\Http\Controllers\PermissionController::class, 'destroy']);

    Route::resource('roles', App\Http\Controllers\RoleController::class);
    //assign permission to role
    Route::get('roles/{role}/assign-permission', [App\Http\Controllers\RoleController::class, 'assignPermission'])->name('roles.assign-permission');
    //process assign permission to role
    Route::put('roles/{role}/assign-permission', [App\Http\Controllers\RoleController::class, 'processAssignPermission'])->name('roles.process-assign-permission');

    // user
    Route::resource('users', App\Http\Controllers\UserController::class);



    // Nu Program
    Route::resource('nu-program', App\Http\Controllers\NuProgramController::class);
    // program update.status
    Route::post('/nu-program/update-status', [App\Http\Controllers\NuProgramController::class, 'updateStatus'])->name('nu-program.update.status');
    // Nu Course
    Route::resource('nu-course', App\Http\Controllers\NuCourseController::class);
    // course update.status
    Route::post('/nu-course/update-status', [App\Http\Controllers\NuCourseController::class, 'updateStatus'])->name('nu-course.update.status');
    // Nu Subject
    Route::resource('nu-subject', App\Http\Controllers\NuSubjectController::class);
    // subject update.status
    Route::post('/nu-subject/update-status', [App\Http\Controllers\NuSubjectController::class, 'updateStatus'])->name('nu-subject.update.status');



});

Route::get('degree', [App\Http\Controllers\HomeController::class, 'index']);

Route::post('fetch-districts', [App\Http\Controllers\HomeController::class, 'fetchDistrict']);
Route::post('fetch-upazilas', [App\Http\Controllers\HomeController::class, 'fetchUpazila']);
Route::post('fetch-unions', [App\Http\Controllers\HomeController::class, 'fetchUnion']);
Route::post('fetch-postcodes', [App\Http\Controllers\HomeController::class, 'fetchPostCode']);

// nu college
Route::resource('nu-college', App\Http\Controllers\NuCollegeController::class);
// college fetch
Route::post('fetch-colleges', [App\Http\Controllers\HomeController::class, 'fetchNuCollege']);
Route::post('fetch-college-code', [App\Http\Controllers\HomeController::class, 'fetchCollegeCode']);
// search college
Route::get('/search-colleges', [App\Http\Controllers\HomeController::class, 'search'])->name('search-colleges');


require __DIR__.'/auth.php';


//Route::get('read-json', [App\Http\Controllers\JsonController::class, 'index']);
