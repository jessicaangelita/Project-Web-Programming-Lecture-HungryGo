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
    return view('new-welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard', [MenuController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/createmenu', [MenuController::class, 'create'])->middleware(['isAdmin']);
Route::post('/storemenu', [MenuController::class, 'store'])->name('storemenu')->middleware(['isAdmin']);
Route::get('/showmenu/{id}', [MenuController::class, 'show'])->name('showmenu')->middleware(['isCustomer']);
Route::get('/editmenu/{id}', [MenuController::class, 'edit'])->name('editmenu')->middleware(['isAdmin']);
Route::patch('/updatemenu/{id}', [MenuController::class, 'update'])->name('updatemenu')->middleware(['isAdmin']);
Route::delete('/deletemenu/{id}', [MenuController::class, 'destroy'])->name('deletemenu')->middleware(['isAdmin']);

Route::post('/storecart/{id}', [CartController::class, 'store'])->name('storecart')->middleware(['isCustomer']);
Route::get('/ordermenu', [OrderController::class, 'show'])->middleware(['auth']);
Route::get('/cart', [CartController::class, 'index'])->name('cart')->middleware(['isCustomer']);
Route::get('/editcart/{id}', [CartController::class, 'edit'])->name('editcart')->middleware(['isCustomer']);
Route::patch('/updatecart/{id}', [CartController::class, 'update'])->name('updatecart')->middleware(['isCustomer']);
Route::delete('/deletecart/{id}', [CartController::class, 'destroy'])->name('deletecart')->middleware(['isCustomer']);
Route::post('/checkout',[CartController::class,'checkout'])->middleware(['isCustomer']);

Route::patch('/changestatus/{id}', [OrderController::class, 'ChangeStatus'])->middleware(['isAdmin']);

require __DIR__.'/auth.php';
