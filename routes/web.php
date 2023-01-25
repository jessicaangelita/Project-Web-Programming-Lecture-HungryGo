<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;

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

Route::get('/about', function () {
    return view('about');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [MenuController::class, 'index'])->name('dashboard');
    Route::get('/ordermenu', [OrderController::class, 'show']);
});

Route::middleware('isAdmin')->group(function () {
    Route::get('/createmenu', [MenuController::class, 'create']);
    Route::post('/storemenu', [MenuController::class, 'store'])->name('storemenu');
    Route::get('/editmenu/{id}', [MenuController::class, 'edit'])->name('editmenu');
    Route::patch('/updatemenu/{id}', [MenuController::class, 'update'])->name('updatemenu');
    Route::delete('/deletemenu/{id}', [MenuController::class, 'destroy'])->name('deletemenu');
    Route::patch('/changestatus/{id}', [OrderController::class, 'ChangeStatus']);
});

Route::middleware('isCustomer')->group(function(){
    Route::get('/showmenu/{id}', [MenuController::class, 'show'])->name('showmenu');
    Route::post('/storecart/{id}', [CartController::class, 'store'])->name('storecart');
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::get('/editcart/{id}', [CartController::class, 'edit'])->name('editcart');
    Route::patch('/updatecart/{id}', [CartController::class, 'update'])->name('updatecart');
    Route::delete('/deletecart/{id}', [CartController::class, 'destroy'])->name('deletecart');
    Route::post('/checkout',[CartController::class,'checkout']);
});

require __DIR__.'/auth.php';
