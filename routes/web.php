<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\TestController;
use  App\Http\Controllers\HomeController;

use  App\Http\Controllers\CommandeController;

use  App\Http\Controllers\ProductController;
use  App\Http\Controllers\ProductTypeController;
use  App\Http\Controllers\CategoryController;


use  App\Http\Controllers\ProductController;
use  App\Http\Controllers\ProductTypeController;



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

Route::get('/page1', function () {
    return view('page');
});
Route::get('/register', function () {
    return view('form');
});


//Back//
Route::view('/admin/dashboard', 'admin.dashboard')->name('admin.dashboard');
//Commandes
Route::get('/commande', [CommandeController::class, 'index'])->name('commande.indexB');
Route::get('/commande/create', [CommandeController::class, 'create'])->name('commande.create');

Route::post('/newCommande',[CommandeController::class,'store'])->name('commande.store');
Route::get('/commande/{id}/edit',[CommandeController::class,'edit'])->name('commande.edit');
Route::put('/commande/update/{id}', [CommandeController::class,'update'])->name('commande.update');
Route::delete('/commande/delete/{id}', [CommandeController::class, 'destroy'])->name('commande.destroy');


//Products_Admin
Route::get('/admin/products', [ProductController::class, 'index'])->name('product.indexProduct');
Route::get('/admin/createProduct', [ProductController::class, 'create'])->name('product.create');
Route::post('admin/addProduct', [ProductController::class, 'store'])->name('product.store');
Route::get('/admin/product/{Product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/admin/editProduct/{Product}', [ProductController::class, 'update'])->name('product.update');
Route::post('/admin/deleteProduct', [ProductController::class, 'destroy'])->name('product.destroy');

//Products_User
Route::get('/products', [ProductController::class, 'indexUser'])->name('product.indexUser');
Route::view('/product', 'product.product')->name('product.product');

//Catalog_Admin
Route::get('/admin/catalogs', [ProductTypeController::class, 'index'])->name('catalog.indexProductType');
Route::get('/admin/createCatalog', [ProductTypeController::class, 'create'])->name('catalog.create');
Route::post('admin/addCatalog', [ProductTypeController::class, 'store'])->name('catalog.store');
Route::get('/admin/catalog/{ProductType}/edit', [ProductTypeController::class, 'edit'])->name('catalog.edit');
Route::put('/admin/editCatalog/{ProductType}', [ProductTypeController::class, 'update'])->name('catalog.update');
Route::post('/admin/deleteCatalog', [ProductTypeController::class, 'destroy'])->name('catalog.destroy');



//Front//
Route::view('/user', 'user.userinterface')->name('user.userinterface');
//events
//Route::view('/events', 'Event.event')->name('Event.event');
//eventsdetails
Route::view('/eventdetails','Event.eventdetails')->name('Event.eventdetails');
// Event routes
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
Route::view('/cart', 'cart.cart')->name('cart.cart');
Route::view('/checkout', 'cart.checkout')->name('cart.checkout');

//Contact
Route::view('/contact', 'layouts.contact')->name('layouts.contact');




