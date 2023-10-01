<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\TestController;
use  App\Http\Controllers\HomeController;

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

Route::view('/admin/dashboard', 'admin.dashboard')->name('admin.dashboard');
Route::view('/user', 'user.userinterface')->name('user.userinterface');
//events
Route::view('/events', 'Event.event')->name('Event.event');
//events
Route::view('/eventdetails','Event.eventdetails')->name('Event.eventdetails');


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
