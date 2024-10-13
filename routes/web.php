<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePageContentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SingleProductController;
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


Route::get('/', [HomePageContentController::class, 'index'])->name('home.index');
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/product/{id}', [SingleProductController::class, 'index'])->name('singleproduct.index');
Route::get('/test', function () {
    return view('shop.shop-list');
});
Route::get('/cooperation-b2b', function () {
    return view('front.b2b');
})->name('b2b.index');
Route::get('/about-us', function () {
    return view('front.about-us');
})->name('b2b.index');
Route::get('/contact', function () {
    return view('front.contact');
})->name('contact.index');

//panier
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');

//commande
Route::resource('checkout', CommandeController::class);
Route::get('/checkout', [CommandeController::class, 'index'])->name('checkout.index');
Route::delete('/order/{orderId}', [CommandeController::class, 'drop'])->name('order.drop');
Route::get('/download-pdf/{id}', [CommandeController::class, 'downloadPDF'])->name('download.pdf');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('categories', CategoryController::class);
    Route::get('/commandes', [CommandeController::class, 'adminIndex'])->name('commandes.index');
    Route::resource('products', ProductController::class);
    Route::get('home-page/edit', [HomePageContentController::class, 'edit'])->name('home_page.edit');
    Route::put('home-page/update', [HomePageContentController::class, 'update'])->name('home_page.update');
    Route::resource('product-details', ProductDetailsController::class);
});

require __DIR__.'/auth.php';
