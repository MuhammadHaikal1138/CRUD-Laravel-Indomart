<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DrinkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.login');
})->name('show.login');

Route::prefix('/login')->group(function() {
    Route::get('/Register', [UserController::class, 'create'])->name('create.user');
    Route::post('/', [UserController::class, 'store'])->name('store.user');
    Route::post('/login', [UserController::class, 'login'])->name('login');
});

Route::prefix('/pages')->group(function(){
    Route::get('/Dashboard', [Controller::class, 'landing'])->name('dashboard');
});

Route::prefix('/food')->name('food.')->group(function () {
    Route::get('/', [FoodController::class, 'index'])->name('index');
    Route::get('/create', [FoodController::class, 'create'])->name('create');
    Route::post('/store', [FoodController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [FoodController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [FoodController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [FoodController::class, 'destroy'])->name('destroy');
});

Route::prefix('/drink')->name('drink.')->group(function(){
    Route::get('/', [DrinkController::class, 'index'])->name('index');
    Route::get('/create', [DrinkController::class, 'create'])->name('create');
    Route::post('/store', [DrinkController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [DrinkController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [DrinkController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [DrinkController::class, 'destroy'])->name('destroy');
});
