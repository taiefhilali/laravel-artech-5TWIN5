<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\TestController;
use  App\Http\Controllers\HomeController;
<<<<<<< Updated upstream

=======
use  App\Http\Controllers\CommandeController;
use  App\Http\Controllers\EventController;
>>>>>>> Stashed changes
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


Route::view('/products', 'product.products')->name('product.products');
//Back//
Route::view('/admin/dashboard', 'admin.dashboard')->name('admin.dashboard');
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
//Cart
Route::view('/cart', 'cart.cart')->name('cart.cart');
Route::view('/checkout', 'cart.checkout')->name('cart.checkout');

//Contact
Route::view('/contact', 'layouts.contact')->name('layouts.contact');

Route::view('/products', 'product.products')->name('product.products');
Route::view('/product', 'product.product')->name('product.product');

