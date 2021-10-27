<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Faculty\FacultyController;
use App\Http\Controllers\Admin\AdminController;


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

    //from handling  to validating log-in and registration inputs

    Route::middleware(['guest:web', 'PreventBackHistory'])->group(function(){
        Route::view('/login','user.login')->name('login');
        Route::view('/register','admin.student-management.register')->name('register');

        // USER Register (create) and Login (check)
        Route::post('/create',[UserController::class,'create'])->name('create');
        Route::post('/check',[UserController::class,'check'])->name('check');


        // User CRUD
        Route::put('/update/{id}',[UserController::class,'update'])->name('update');
        Route::get('/update/{id}',[UserController::class,'edit'])->name('edit');

        
    });

    // When the user is now logged-in

    //Middleware:PreventBackHistory prevents browser to go back from previous pages when already logged 
    
    Route::middleware(['auth:web', 'PreventBackHistory'])->group(function(){
        Route::view('/home','user.home')->name('home'); 
        Route::post('/logout',[UserController::class,'logout'])->name('logout');
        
        
        
    });
    

});

Route::prefix('faculty')->name('faculty.')->group(function(){

    Route::middleware(['guest:faculty','PreventBackHistory'])->group(function(){
         Route::view('/login','faculty.login')->name('login');
         Route::view('/register','faculty.register')->name('register');
         Route::post('/create',[FacultyController::class,'create'])->name('create');
         Route::post('/check',[FacultyController::class,'check'])->name('check');
    });

    Route::middleware(['auth:faculty','PreventBackHistory'])->group(function(){
         Route::view('/home','faculty.home')->name('home');
         Route::post('logout',[FacultyController::class,'logout'])->name('logout');
    });

});



Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/login','admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        // Route::view('/home','dashboard.admin.home')->name('home');
        Route::view('/home','admin.home')->name('home'); 
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');

        // CRUD Student Route
        Route::delete('/destroy/{id}',[UserController::class,'destroy'])->name('student-destroy');

        //Sidebar route
        Route::view('/admin tab', 'admin.admin-tab')->name('admin-tab');
        Route::get('/student tab', [UserController::class,'index'])->name('student-tab');
        Route::view('/faculty tab', 'admin.faculty-tab')->name('faculty-tab');
        Route::view('/class tab', 'admin.class-tab')->name('class-tab');
        Route::view('/message tab', 'admin.message-tab')->name('message-tab');
        Route::view('/calendar tab', 'admin.calendar-tab')->name('calendar-tab');
    });

});



