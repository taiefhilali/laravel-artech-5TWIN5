<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\CommandeController;
use  App\Http\Controllers\CartController;


use  App\Http\Controllers\ProductController;
use  App\Http\Controllers\ProductTypeController;
use  App\Http\Controllers\CategoryController;
use  App\Http\Controllers\EventController;


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

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::view('/admin/dashboard', 'admin.dashboard')->name('admin.dashboard');
//Commandes
Route::get('/commande', [CommandeController::class, 'index'])->name('commande.indexB');
Route::get('/commande/create', [CommandeController::class, 'create'])->name('commande.create');

Route::post('/newCommande',[CommandeController::class,'store'])->name('commande.store');
Route::get('/commande/{id}/edit',[CommandeController::class,'edit'])->name('commande.edit');
Route::put('/commande/update/{id}', [CommandeController::class,'update'])->name('commande.update');
Route::delete('/commande/delete/{id}', [CommandeController::class, 'destroy'])->name('commande.destroy');

//Carts (Back)
Route::get('/admin/carts', [CartController::class, 'index'])->name('cart.indexB');
Route::get('/cart/create', [CartController::class, 'create'])->name('cart.create');


// Route::view('/admin/dashboard', 'admin.dashboard')->name('admin.dashboard');
//Commandes
Route::get('/commande', [CommandeController::class, 'index'])->name('commande.indexB');
Route::get('/commande/create', [CommandeController::class, 'create'])->name('commande.create');

Route::post('/newCommande',[CommandeController::class,'store'])->name('commande.store');
Route::get('/commande/{id}/edit',[CommandeController::class,'edit'])->name('commande.edit');
Route::put('/commande/update/{id}', [CommandeController::class,'update'])->name('commande.update');
Route::delete('/commande/delete/{id}', [CommandeController::class, 'destroy'])->name('commande.destroy');
Route::get('/showPC/{id}', [ProductController::class, 'showCommandeWithProducts'])->name('commandes.showPC');


//Carts (Back)
Route::get('/admin/carts', [CartController::class, 'index'])->name('cart.indexB');
Route::get('/cart/create', [CartController::class, 'create'])->name('cart.create');
Route::get('/cart/create', [CartController::class, 'create'])->name('cart.create');

Route::post('/admin/newcart',[CartController::class,'store'])->name('cart.store');
Route::get('/cart/{id}/edit',[CartController::class,'edit'])->name('cart.editB');
Route::put('/cart/update/{id}', [CartController::class,'update'])->name('cart.update');
Route::delete('/cart/delete/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
// Route::post('/products/{product}/add-to-cart', 'CartController@addToCart')->name('cart.add');
Route::get('/create-order', [CommandeController::class,'createOrderFromCart'])->name('commande.createFromCart');
Route::post('/product/{productId}/add-to-cart', [ProductController::class, 'addToCart'])->name('product.addToCart');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.cart');
// Route::post('/cart/update/{cartItemId}', [CartController::class, 'updateProductInCart'])->name('cart.update');
Route::put('cart/update/{id}', [CartController::class, 'updateProductInCart'])->name('cart.update');


//Products_Admin
Route::get('/admin/products', [ProductController::class, 'index'])->name('product.indexProduct');
Route::get('/admin/createProduct', [ProductController::class, 'create'])->name('product.create');
Route::post('admin/addProduct', [ProductController::class, 'store'])->name('product.store');
Route::get('/admin/product/{Product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/admin/editProduct/{Product}', [ProductController::class, 'update'])->name('product.update');
Route::post('/admin/deleteProduct', [ProductController::class, 'destroy'])->name('product.destroy');

//Products_User
Route::get('/products', [ProductController::class, 'indexUser'])->name('product.indexUser');
Route::get('/product/{id}', [ProductController::class, 'indexP'])->name('product.product');

//Products_Admin
Route::get('/admin/products', [ProductController::class, 'index'])->name('product.indexProduct');
Route::get('/admin/createProduct', [ProductController::class, 'create'])->name('product.create');
Route::post('admin/addProduct', [ProductController::class, 'store'])->name('product.store');
Route::get('/admin/product/{Product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/admin/editProduct/{Product}', [ProductController::class, 'update'])->name('product.update');
Route::post('/admin/deleteProduct', [ProductController::class, 'destroy'])->name('product.destroy');

//Products_User
Route::get('/products', [ProductController::class, 'indexUser'])->name('product.indexUser');
Route::get('/product/{id}', [ProductController::class, 'indexP'])->name('product.product');

//events
//Route::view('/events', 'Event.event')->name('Event.event');
//eventsdetails
Route::view('/eventdetails','Event.eventdetails')->name('Event.eventdetails');
// Events routes
Route::get('/admin/events', [EventController::class, 'indexb'])->name('Event.indexb');
Route::delete('/admin/events/{event}', [EventController::class, 'destroyb'])->name('Event.destroyb');
Route::get('/events', [EventController::class, 'index'])->name('Event.index');
Route::get('/events/create', [EventController::class, 'create'])->name('Event.create');
Route::post('/events/store', [EventController::class, 'store'])->name('Event.store');
Route::get('/events/{id}', [EventController::class, 'show'])->name('Event.show');
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('Event.destroy');
Route::get('events/{event}/edit', [EventController::class, 'edit'])->name('Event.edit');
Route::put('events/{event}', [EventController::class, 'update'])->name('Event.update');

// Category routes
Route::resource('categories', 'CategoryController');
Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/admin/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/admin/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/admin/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/admin/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

//Cart
Route::view('/showCart', 'cart.cart')->name('cart.cart');

Route::view('/checkout', 'cart.checkout')->name('cart.checkout');

//Contact
Route::view('/contact', 'layouts.contact')->name('layouts.contact');



require __DIR__.'/auth.php';
