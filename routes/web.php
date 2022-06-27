<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DogsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Livewire\RegisterDogs;
use App\Http\Controllers\Test;
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

Route::prefix('admin')->group(function(){

    Route::get('/dogs', [DogsController::class, 'index'])->name('dogs.index');
    Route::post('/manage/dogs/table/info', [DogsController::class, 'render'])->name('get.dogs');
    Route::get('dogs/create', [DogsController::class, 'create'])->name('dogs.create');
    Route::resource('/manage/users', UserController::class);
    Route::get('test', [Test::class, 'index']);


});

require __DIR__.'/auth.php';
