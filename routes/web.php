<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\TestController;
use  App\Http\Controllers\HomeController;
use  App\Http\Controllers\CommandeController;

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

//Front//
Route::view('/user', 'user.userinterface')->name('user.userinterface');
//events
Route::view('/events', 'Event.event')->name('Event.event');
//eventsdetails
Route::view('/eventdetails','Event.eventdetails')->name('Event.eventdetails');

//Cart
Route::view('/cart', 'cart.cart')->name('cart.cart');
Route::view('/checkout', 'cart.checkout')->name('cart.checkout');

//Contact
Route::view('/contact', 'layouts.contact')->name('layouts.contact');

Route::view('/products', 'product.products')->name('product.products');
Route::view('/product', 'product.product')->name('product.product');


Route::get('/page2/{nom}', function ($nom) {
    return "<h1>Welcome $nom</h1>";
});

Route::get('/message/{nom}/{id}', function ($nom, $id) {
    return "Message: nom=$nom, id=$id";
});


Route::get('/page2/{nom?}', function ($nom = null) {
    if ($nom) {
        return "<h1>Welcome $nom</h1>";
    } else {
        return "<h1>Welcome</h1>";
    }
});
Route::get('/page3/{nom}', function ($nom) {
    return "<h1>Welcome $nom</h1>";
})->where('nom', '[A-Za-z]+');



Route::get('/message/{nom}/{id}', function ($nom, $id) {
    return "Message: nom=$nom, id=$id";
})->where('id', '[0-9]+');



//************************************** */

// Route::get('/example', function () {
//     return view('example');
// });

Route::get('/example/{id}', function ($id=null) {
    return view('example',['id','$id']);
});

Route::get('/hello/{id?}', function ($id=null) {
    echo 'test route hello'.$id;
// }) ->where('id','[A-Z]{4}');
});

Route::get('/index',[TestController::class,'index']);
Route::get('/show',[HomeController::class,'show']);
