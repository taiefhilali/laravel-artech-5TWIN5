<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ClientLivraisonController;
use App\Http\Controllers\LivraisonController;
use App\Http\Controllers\Participant;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChatController;


use  App\Http\Controllers\CommandeController;
use  App\Http\Controllers\CartController;

use  App\Http\Controllers\MuseumController;
use  App\Http\Controllers\MuseumCategoriesController;

use  App\Http\Controllers\ProductController;
use  App\Http\Controllers\ProductTypeController;
use  App\Http\Controllers\CategoryController;
use  App\Http\Controllers\EventController;

use  App\Http\Controllers\UserFavoriteProductsController;
use  App\Http\Controllers\FeedbackController;
use  App\Http\Controllers\CommentController;

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


// Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
//     ->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Route::view('/admin/dashboard', 'admin.dashboard')->name('admin.dashboard');
//Commandes







Route::middleware(['auth'])->group(function () {
    Route::get('/cart/export-to-pdf', [CartController::class, 'exportCartToPDF'])->name('cart.exportToPDF');
});




//Products_Admin
Route::get('/admin/products', [ProductController::class, 'index'])->name('product.indexProduct');
Route::get('/admin/createProduct', [ProductController::class, 'create'])->name('product.create');
Route::post('admin/addProduct', [ProductController::class, 'store'])->name('product.store');
Route::get('/admin/product/{Product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/admin/editProduct/{Product}', [ProductController::class, 'update'])->name('product.update');
Route::post('/admin/deleteProduct', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/statistics', [ProductController::class, 'showStatistics'])->name('product.statistic');

//Products_User
Route::get('/products', [ProductController::class, 'indexUser'])->name('product.indexUser');
Route::get('/product/{id}', [ProductController::class, 'indexP'])->name('product.product');

 //feedback
 
Route::post('/product/{productId}/feedback/store', [FeedbackController::class, 'store'])->name('feedback.store');
Route::get('/product/{productId}/feedback/create', [FeedbackController::class, 'create'])->name('feedback.create');
Route::delete('/products/{productId}/feedback/{feedbackId}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');
Route::put('/feedback/{productId}/{feedbackId}', [FeedbackController::class, 'update'])->name('feedback.update');
Route::get('/statisticscomment', [FeedbackController::class, 'showStatistics'])->name('statistics');


//comments

Route::post('/comments/{feedbackId}/store', [CommentController::class, 'store'])->name('comments.store');


// Route::get('/feedback/{productId}/edit/{feedbackId}', [FeedbackController::class, 'edit'])->name('feedback.edit');
// Route::put('/feedback/{productId}/feedback/{feedbackId}', [FeedbackController::class, 'update'])->name('feedback.update');


//Catalog_Admin




//Front//
Route::get('/user', [MuseumController::class, 'indexf'])->name('user.userinterface');









//Cart
Route::view('/showCart', 'cart.cart')->name('cart.cart');

Route::view('/checkout', 'cart.checkout')->name('cart.checkout');

//Contact
Route::view('/contact', 'layouts.contact')->name('layouts.contact');


Route::group(['middleware' => 'is_client'], function () {
Route::get('/products', [ProductController::class, 'indexUser'])->name('product.indexUser');
Route::get('/events', [EventController::class, 'index'])->name('Event.index');
Route::get('/events/create', [EventController::class, 'create'])->name('Event.create'); 
Route::post('/events/store', [EventController::class, 'store'])->name('Event.store');
Route::get('/events/{id}', [EventController::class, 'show'])->name('Event.show');
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('Event.destroy');
Route::get('events/{event}/edit', [EventController::class, 'edit'])->name('Event.edit');
Route::put('events/{event}', [EventController::class, 'update'])->name('Event.update');
Route::post('events/participate/{eventId}', [Participant::class, 'participate'])->name('Participant.participate');
Route::delete('event/unparticipate/{eventId}', [Participant::class, 'unparticipate'])->name('Participant.unparticipate');
Route::get('/participations', [Participant::class, 'index'])->name('Event.indexpart');;
Route::view('/eventdetails','Event.eventdetails')->name('Event.eventdetails');
Route::put('/feedback/{productId}/{feedbackId}', [FeedbackController::class, 'update'])->name('feedback.update');
Route::post('/comments/{feedbackId}/store', [CommentController::class, 'store'])->name('comments.store');
Route::put('/comments/{feedbackId}/{commentId}', [CommentController::class, 'update'])->name('comments.update');
Route::get('/comments/create/{feedbackId}', [CommentController::class, 'create'])->name('comments.create');
Route::delete('/comments/{feedbackId}/{commentId}', [CommentController::class, 'destroy'])->name('comments.destroy');
Route::get('/product/{id}', [ProductController::class, 'indexP'])->name('product.product');
Route::post('/product/{productId}/feedback/store', [FeedbackController::class, 'store'])->name('feedback.store');
Route::get('/product/{productId}/feedback/create', [FeedbackController::class, 'create'])->name('feedback.create');
Route::delete('/products/{productId}/feedback/{feedbackId}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');
Route::get('/cart/{id}/edit',[CartController::class,'edit'])->name('cart.editB');
Route::put('/cart/update/{id}', [CartController::class,'update'])->name('cart.update');
Route::delete('/cart/delete/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
// Route::post('/products/{product}/add-to-cart', 'CartController@addToCart')->name('cart.add');
Route::get('/create-order', [CommandeController::class,'createOrderFromCart'])->name('commande.createFromCart');
Route::post('/product/{productId}/add-to-cart', [ProductController::class, 'addToCart'])->name('product.addToCart');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.cart');
// Route::post('/cart/update/{cartItemId}', [CartController::class, 'updateProductInCart'])->name('cart.update');
Route::put('cart/update/{id}', [CartController::class, 'updateProductInCart'])->name('cart.update');
Route::post('/cart/confirm', [CartController::class, 'confirm'])->name('cart.confirm');
Route::get('/cart/export-to-pdf', [CartController::class, 'exportCartToPDF'])->name('cart.exportCartToPDF');
Route::get('/cart/create', [CartController::class, 'create'])->name('cart.create');
Route::post('/user/addfav/{productId}', [UserFavoriteProductsController::class, 'add'])->name('fav.add');
Route::get('users/favorites', [UserFavoriteProductsController::class, 'index'])->name('product.indexFav');;
Route::delete('user/removefav/{productId}', [UserFavoriteProductsController::class, 'remove'])->name('product.removeFav');
Route::get('/museums', [MuseumController::class, 'indexf'])->name('museums.indexf');




});
Route::group(['middleware' => 'is_admin'], function () {
Route::view('/admin/dashboard', 'admin.dashboard')->name('admin.dashboard');
Route::get('/admin/products', [ProductController::class, 'index'])->name('product.indexProduct');
Route::resource('/museum', MuseumController::class);
Route::get('/eventsearch', [EventController::class, 'eventsearch'])->name('Event.eventsearch');
Route::resource('/category', MuseumCategoriesController::class);
Route::get('/admin/createProduct', [ProductController::class, 'create'])->name('product.create');
Route::post('admin/addProduct', [ProductController::class, 'store'])->name('product.store');
Route::get('/admin/product/{Product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/admin/editProduct/{Product}', [ProductController::class, 'update'])->name('product.update');
Route::post('/admin/deleteProduct', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/statistics', [ProductController::class, 'showStatistics'])->name('product.statistic');
Route::get('/statisticscomment', [FeedbackController::class, 'showStatistics'])->name('statistics');
Route::get('/admin/events', [EventController::class, 'indexb'])->name('Event.indexb');
Route::delete('/admin/events/{event}', [EventController::class, 'destroyb'])->name('Event.destroyb');
Route::get('/admin/catalogs', [ProductTypeController::class, 'index'])->name('catalog.indexProductType');
Route::get('/admin/createCatalog', [ProductTypeController::class, 'create'])->name('catalog.create');
Route::post('admin/addCatalog', [ProductTypeController::class, 'store'])->name('catalog.store');
Route::get('/admin/catalog/{ProductType}/edit', [ProductTypeController::class, 'edit'])->name('catalog.edit');
Route::put('/admin/editCatalog/{ProductType}', [ProductTypeController::class, 'update'])->name('catalog.update');
Route::post('/admin/deleteCatalog', [ProductTypeController::class, 'destroy'])->name('catalog.destroy');
Route::resource('categories', 'CategoryController');
Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/admin/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/admin/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/admin/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/admin/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('/admin/categories/search', [CategoryController::class, 'search'])->name('categories.search');
Route::get('/commande', [CommandeController::class, 'index'])->name('commande.indexB');
Route::get('/commande/create', [CommandeController::class, 'create'])->name('commande.create');
Route::post('/newCommande',[CommandeController::class,'store'])->name('commande.store');
Route::get('/commande/{id}/edit',[CommandeController::class,'edit'])->name('commande.edit');
Route::put('/commande/update/{id}', [CommandeController::class,'update'])->name('commande.update');
Route::delete('/commande/delete/{id}', [CommandeController::class, 'destroy'])->name('commande.destroy');
Route::get('/admin/carts', [CartController::class, 'index'])->name('cart.indexB');
Route::post('/admin/newcart',[CartController::class,'store'])->name('cart.store');
Route::get('/commande', [CommandeController::class, 'index'])->name('commande.indexB');
Route::get('/commande/create', [CommandeController::class, 'create'])->name('commande.create');
Route::post('/newCommande',[CommandeController::class,'store'])->name('commande.store');
Route::get('/commande/{id}/edit',[CommandeController::class,'edit'])->name('commande.edit');
Route::put('/commande/update/{id}', [CommandeController::class,'update'])->name('commande.update');
Route::delete('/commande/delete/{id}', [CommandeController::class, 'destroy'])->name('commande.destroy');
Route::get('/showPC/{id}', [ProductController::class, 'showCommandeWithProducts'])->name('commandes.showPC');
Route::get('/admin/carts', [CartController::class, 'index'])->name('cart.indexB');
Route::get('/cart/create', [CartController::class, 'create'])->name('cart.create');
Route::get('/search', [ProductController::class, 'search'])->name('product.search');
Route::get('/livraisons', [LivraisonController::class, 'index'])->name('Livraisons');
Route::post('/livraison/create', [LivraisonController::class, 'store'])->name('livraison.store');
Route::get('/livraison/{livraisonId}', [LivraisonController::class,'getLivraisonDetails']);
Route::get('/calendar', [LivraisonController::class,'calendriertunis']);
Route::put('/livraison/{livraisonId}/edit', [LivraisonController::class,'edit']);
Route::delete('/livraison/{livraisonId}/delete', [LivraisonController::class,'delete']);






});


Route::group(['middleware' => 'is_livreur'], function () {
    Route::get('/calendar', [LivraisonController::class,'calendriertunis']);
    Route::get('/livreur/livraisonsbase', [ClientLivraisonController::class, 'index'])->name('LivraisonsC');
    Route::get('/livreur/livraisonslist', [ClientLivraisonController::class, 'index2'])->name('LivraisonsList');
    Route::put('/livraison/{livraisonId}/accept', [ClientLivraisonController::class,'accepter']);
    Route::get('/livraison/{livraisonId}/commandes', [ClientLivraisonController::class,'getCommandesLiv']);
    Route::put('/livraison/commande/{id}/annuler', [ClientLivraisonController::class,'annulerCommande']);
    Route::put('/livraison/commande/{id}/payee', [ClientLivraisonController::class,'payerCommande']);});


Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
->name('logout');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/chat', [ChatController::class, 'index'])->name('gpt.chat');
Route::post('/chat/sendMessage', [ChatController::class, 'sendMessage'])->name('chat.sendMessage');


require __DIR__.'/auth.php';


