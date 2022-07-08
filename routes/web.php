<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CoAdmin\CoAdminController;
use App\Http\Controllers\RoleCheckerController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->group(function() {
    //RoleChecker
    Route::get('/dashboard', [RoleCheckerController::class, 'roleCheck']);

    //Admin Routes
    Route::group(['middleware' => ['role:Admin']], function () {

        Route::prefix('/admin')->group(function(){
            Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
            Route::get('/dogs', [AdminController::class, 'manageDogs'])->name('dogs.index');
            Route::get('/dogs/create', [AdminController::class, 'dogsCreate'])->name('dogs.create');
            Route::get('user/create', [AdminController::class, 'createUsers'])->name('user.create');
            Route::get('/manage/users', [AdminController::class, 'manageUsers'])->name('users.index');

            // Edit
            Route::get('/dog/edit/{dog}', [AdminController::class, 'show'])->name('dog.edit');
        });
    });

    //CoAdmin Routes
    Route::group(['middleware' => ['role:CoAdmin']], function () {

        Route::prefix('co-admin')->group(function(){
            Route::get('/dashboard', [CoAdminController::class, 'dashboard'])->name('coAdminDashboard');
        });
    });

});

require __DIR__.'/auth.php';
