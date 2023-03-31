<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory');
    Route::put('AddToCart', [CartController::class, 'store'])->name('AddToCart');
    Route::get('CheckCart/{id}', [CartController::class, 'CheckCart'])->name('CheckCart');
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
});

Route::get('/admin', [AdminController::class, 'index'])->name('adminPanel');
Route::get('/admin/add', [AdminController::class, 'getAddItem'])->name('addItemPage');
Route::post('/admin/add', [AdminController::class, 'addItem'])->name('addItem');
Route::get('/admin/update/{id}', [AdminController::class, 'getUpdateItem'])->name('updateItemPage');
Route::post('/admin/update/{id}', [AdminController::class, 'updateItem'])->name('updateItem');

require __DIR__.'/auth.php';
