<?php

use App\Http\Controllers\CalendrierController;
use App\Http\Controllers\ClientLivraisonController;
use App\Http\Controllers\LivraisonController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\TestController;
use  App\Http\Controllers\HomeController;

use  App\Http\Controllers\CommandeController;

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
Route::get('/livraisons', [LivraisonController::class, 'index'])->name('Livraisons');
Route::post('/livraison/create', [LivraisonController::class, 'store'])->name('livraison.store');
Route::get('/livraison/{livraisonId}', [LivraisonController::class,'getLivraisonDetails']);
Route::put('/livraison/{livraisonId}/edit', [LivraisonController::class,'edit']);
Route::delete('/livraison/{livraisonId}/delete', [LivraisonController::class,'delete']);
Route::get('/calendar', [LivraisonController::class,'calendriertunis']);
Route::get('/livreur/livraisonsbase', [ClientLivraisonController::class, 'index'])->name('LivraisonsC');
Route::get('/livreur/livraisonslist', [ClientLivraisonController::class, 'index2'])->name('LivraisonsList');
Route::put('/livraison/{livraisonId}/accept', [ClientLivraisonController::class,'accepter']);
Route::get('/livraison/{livraisonId}/commandes', [ClientLivraisonController::class,'getCommandesLiv']);

Route::put('/livraison/commande/{id}/annuler', [ClientLivraisonController::class,'annulerCommande']);
Route::put('/livraison/commande/{id}/payee', [ClientLivraisonController::class,'payerCommande']);


//Back//
Route::view('/admin/dashboard', 'admin.dashboard')->name('admin.dashboard');
//Commandes
Route::get('/commande', [CommandeController::class, 'index'])->name('commande.indexB');
Route::get('/commande/create', [CommandeController::class, 'create'])->name('commande.create');

Route::post('/newCommande',[CommandeController::class,'store'])->name('commande.store');
Route::get('/commande/{id}/edit',[CommandeController::class,'edit'])->name('commande.edit');
Route::put('/commande/update/{id}', [CommandeController::class,'update'])->name('commande.update');
Route::delete('/commande/delete/{id}', [CommandeController::class, 'destroy'])->name('commande.destroy');

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
