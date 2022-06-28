<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DogsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Livewire\ManageUsers;
use App\Http\Controllers\ManageUserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});





// Manage Users





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
