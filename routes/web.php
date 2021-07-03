<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->name('user.')->group(function(){

    //from hlanding  to validating log-in and registration inputs

    Route::middleware(['guest:web', 'PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.user.login')->name('login');
        Route::view('/register','dashboard.user.register')->name('register');
        Route::post('/create',[UserController::class,'create'])->name('create');
        Route::post('/check',[UserController::class,'check'])->name('check');
        
    });

    // When the user is now logged-in

    //Middleware:PreventBackHistory prevents browser to go back from previous pages when already logged 
    
    Route::middleware(['auth:web', 'PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.user.home')->name('home'); 
        Route::post('/logout',[UserController::class,'logout'])->name('logout');
        
        
    });

    

});