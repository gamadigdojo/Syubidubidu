<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TransactionController;
use App\Models\Product;
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
    // paginate the products (3)
    $products = Product::paginate(3);
    return view('welcome', compact('products'));
})->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory');
    Route::put('AddToCart', [CartController::class, 'store'])->name('AddToCart');
    Route::get('CheckCart/{id}', [CartController::class, 'CheckCart'])->name('CheckCart');
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::patch('/cart/{id}/increase', [CartController::class, 'increaseQuantity'])->name('cart.increase');
    Route::patch('/cart/{id}/decrease', [CartController::class, 'decreaseQuantity'])->name('cart.decrease');
    Route::get('transaction', [TransactionController::class, 'getTransactionPage'])->name('getTransactionPage');
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('adminPanel');
    Route::get('/admin/add', [AdminController::class, 'getAddItem'])->name('addItemPage');
    Route::post('/admin/add', [AdminController::class, 'addItem'])->name('addItem');
    Route::get('/admin/getUpdate/{ProductID}', [AdminController::class, 'getUpdateItem'])->name('updateItemPage');
    Route::PATCH('/admin/update/{ProductID}', [AdminController::class, 'updateItem'])->name('updateItem');
    Route::delete('/admin/delete/{ProductID}', [AdminController::class, 'deleteItem'])->name('deleteItem');
});

require __DIR__.'/auth.php';
