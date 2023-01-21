<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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

Route::get('/dashboard', [MenuController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/createmenu', [MenuController::class, 'create'])->middleware(['isAdmin']);
Route::post('/storemenu', [MenuController::class, 'store'])->name('storemenu')->middleware(['isAdmin']);
Route::get('/showmenu/{id}', [MenuController::class, 'show'])->name('showmenu')->middleware(['isCustomer']);
Route::post('/storecart/{id}', [CartController::class, 'store'])->name('storecart')->middleware(['isCustomer']);
Route::get('/ordermenu', [MenuController::class, 'ordermenu'])->middleware(['auth']);
Route::get('/cart', [CartController::class, 'index'])->middleware(['isCustomer']);
Route::get('/editmenu/{id}', [MenuController::class, 'edit']);
Route::post('/updatemenu/{id}', [MenuController::class, 'update']);

require __DIR__.'/auth.php';
