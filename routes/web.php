<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Faculty\FacultyController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserCRUD;
use App\Http\Controllers\Admin\FacultyCRUD;


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
        

        // USER Login (check)
        Route::post('/check',[UserController::class,'check'])->name('check');

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
        
         // FACULTY Login (check)
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
        Route::view('/home','admin-home')->name('home'); 
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');

        // CRUD Student Route
        Route::view('/register student','admin.studen t-management.register')->name('student-register');
        Route::post('/create student account',[UserCRUD::class,'create'])->name('student-create');
        Route::get('/update student account/{id}',[UserCRUD::class,'edit'])->name('student-edit');
        Route::put('/update student account/{id}',[UserCRUD::class,'update'])->name('student-update');
        Route::delete('/delete student/{id}',[UserCRUD::class,'destroy'])->name('student-destroy');

        // CRUD Faculty Route
        Route::view('/register faculty','admin.faculty-management.register')->name('faculty-register');
        Route::post('/create faculty account',[FacultyCRUD::class,'create'])->name('faculty-create');
        Route::get('/update faculty account/{id}',[FacultyCRUD::class,'edit'])->name('faculty-edit');
        Route::put('/update faculty account/{id}',[FacultyCRUD::class,'update'])->name('faculty-update');
        Route::delete('/delete faculty/{id}',[FacultyCRUD::class,'destroy'])->name('faculty-destroy');

        //Sidebar route
        Route::view('/admin tab', 'admin.admin-tab')->name('admin-tab');
        Route::get('/student tab', [UserCRUD::class,'index'])->name('student-tab');
        Route::get('/faculty tab', [FacultyCRUD::class,'index'])->name('faculty-tab');
        Route::view('/class tab', 'admin.class-tab')->name('class-tab');
        Route::view('/message tab', 'admin.message-tab')->name('message-tab');
        Route::view('/calendar tab', 'admin.calendar-tab')->name('calendar-tab');
    });

});



