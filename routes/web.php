<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProdukController;
use App\Models\Order;
use App\Models\Produk;
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
    $produks = Produk::all();
    return view('welcome', compact('produks'));
})->name('home');


Route::get('dashboard', function () {

    $produk = Produk::count();
    $OrderSelesai = Order::where('status', 1)->count();
    $orderBelumSelesai = Order::where('status', 0)->count();


    return view('dashboard', compact('produk', 'OrderSelesai', 'orderBelumSelesai'));
})->name('dashboard')->middleware('auth');


Route::middleware(['auth'])->group(function () {
    Route::resource('produk', ProdukController::class);
    Route::resource('order', OrderController::class);
});
Route::resource('order', OrderController::class)->only('show');

Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('addToCart');
Route::patch('/update-cart-item', [CartController::class, 'updateCart'])->name('update.cart.item');
Route::delete('/delete-cart-item', [CartController::class, 'deleteCart'])->name('delete.cart.item');



Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'doLogin'])->name('doLogin');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
