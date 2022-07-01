<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DogsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Livewire\ManageUsers;
use App\Http\Controllers\ManageUserController;


Route::get('/', function () {
    return view('welcome');
});



Route::middleware(['auth'])->group(function(){

    Route::prefix('admin')->group(function(){
        Route::get('/dogs', [DogsController::class, 'index'])->name('dogs.index');
        Route::post('/manage/dogs/table/info', [DogsController::class, 'render'])->name('get.dogs');
        Route::get('dogs/create', [DogsController::class, 'create'])->name('dogs.create');
        Route::resource('user', UserController::class);
        Route::get('/manage/users', [ManageUserController::class, 'index'])->name('users.index');
    });
});


require __DIR__.'/auth.php';
