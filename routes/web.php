<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Faculty\FacultyController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserCRUD;
use App\Http\Controllers\Admin\FacultyCRUD;
use App\Http\Controllers\Admin\AdminCRUD;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\SubAreaController;
use App\Http\Controllers\Admin\ClassesController;
use App\Http\Controllers\Admin\LevelController;
use App\Http\Controllers\Admin\BadgeController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\BadgeGrantController;
use App\Http\Controllers\FeedbackController;


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

        //User Pages
        Route::get('/grade',[UserController::class,'getGrades'])->name('grade');
        Route::get('/profile/{id}',[UserController::class,'profile'])->name('profile');
        Route::get('/feedback',[UserController::class,'getFeedbacks'])->name('feedback');
        Route::view('/schedule','user.student-schedule')->name('schedule');

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
         Route::get('/classes',[FacultyController::class,'classes'])->name('classes');
         Route::get('/classes/{id}', [FacultyController::class,'class_view'])->name('class_view');
         Route::get('/classes/{id}/marking/{subArea_id}',[FacultyController::class,'gradeMarking'])->name('marking');
         Route::get('/profile/{id}',[FacultyController::class,'profile'])->name('profile');
         Route::post('logout',[FacultyController::class,'logout'])->name('logout');

         //GRADE
        Route::get('/classes/marking/{subArea_id}/encode/{student_id}', [GradeController::class,'index'])->name('grade');
        Route::get('/classes/marking/{subj_id}/grade/{student_id}/create', [GradeController::class,'create'])->name('grade.create');
        Route::get('/classes/marking/{subj_id}/grade/{student_id}/edit', [GradeController::class,'edit'])->name('grade.edit');
        Route::put('/classes/marking/{subj_id}/grade/{student_id}/update/{grade_id}', [GradeController::class,'update'])->name('grade.update');
        Route::post('/classes/marking/{subArea_id}/{subj_id}/encode/{student_id}', [GradeController::class,'store'])->name('grade.store');

        Route::get('/feedback/{id}',[FeedbackController::class,'index'])->name('feedback');
        Route::post('/feedback/create/{id}',[FeedbackController::class,'create'])->name('feedback.create');
        Route::get('/feedback/edit/{id}',[FeedbackController::class,'edit'])->name('feedback.edit');
        Route::put('/feedback/{user_id}/update/{id}',[FeedbackController::class,'update'])->name('feedback.update');
        Route::delete('/feedback/delete/{id}',[FeedbackController::class,'destroy'])->name('feedback.destroy');


        //**CRUD Badge Route
        Route::get('/badge/{id}', [BadgeGrantController::class,'index'])->name('badge');
        Route::post('/badge/create/{id}',[BadgeGrantController::class,'create'])->name('badge.create');
    });

});



Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/login','admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        // Route::view('/home','dashboard.admin.home')->name('home');
        Route::get('/home',[AdminController::class,'dashboardCount'])->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');

        // CRUD Student Route
        Route::get('/register student',[UserCRUD::class,'register'])->name('student-register');
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

        // CRUD Admin Route
        Route::view('/register admin','admin.admin-management.register')->name('admin-register');
        Route::post('/create admin account',[AdminCRUD::class,'create'])->name('admin-create');
        Route::get('/update admin account/{id}',[AdminCRUD::class,'edit'])->name('admin-edit');
        Route::put('/update admin account/{id}',[AdminCRUD::class,'update'])->name('admin-update');
        Route::delete('/delete admin/{id}',[AdminCRUD::class,'destroy'])->name('admin-destroy');

        //Sidebar route
        Route::get('/admin tab', [AdminCRUD::class,'index'])->name('admin-tab');
        Route::get('/student tab', [UserCRUD::class,'index'])->name('student-tab');
        Route::get('/faculty tab', [FacultyCRUD::class,'index'])->name('faculty-tab');
        Route::view('/class tab', 'admin.class-tab')->name('class-tab');
        Route::view('/message tab', 'admin.message-tab')->name('message-tab');
        Route::view('/calendar tab', 'admin.calendar-tab')->name('calendar-tab');

        //class management routes
        //**CRUD Subject Route
        Route::get('/subjects', [SubjectController::class,'index'])->name('subjects');
        Route::post('subjects', [SubjectController::class,'store'])->name('subjects.store');
        Route::get('subjects/edit/{id}', [SubjectController::class,'edit'])->name('subjects.edit');
        Route::post('subjects/update/{id}', [SubjectController::class,'update'])->name('subjects.update');
        Route::delete('subjects/{id}', [SubjectController::class,'destroy'])->name('subjects.destroy');

        Route::post('subject-area', [SubAreaController::class,'createArea'])->name('subjects.createArea');
        Route::get('subject-area/edit/{id}', [SubAreaController::class,'edit'])->name('subjects.editArea');
        Route::post('subject-area/update/{id}', [SubAreaController::class,'update'])->name('subjects.updateArea');
        Route::delete('subject-area/{id}', [SubAreaController::class,'destroy'])->name('subjects.deleteArea');

        //**CRUD Class Route
        Route::get('/classes', [ClassesController::class,'index'])->name('classes');
        Route::post('/classes', [ClassesController::class,'store'])->name('classes.store');
        Route::get('/classes//edit/{id}', [ClassesController::class,'edit'])->name('classes.edit');
        Route::post('/classes/update/{id}', [ClassesController::class,'update'])->name('classes.update');
        Route::delete('/classes/{id}', [ClassesController::class,'destroy'])->name('classes.destroy');

        Route::get('/badge', [BadgeController::class,'index'])->name('badge');
        Route::post('/badge', [BadgeController::class,'store'])->name('badge.store');
        Route::get('/badge//edit/{id}', [BadgeController::class,'edit'])->name('badge.edit');
        Route::post('/badge/update/{id}', [BadgeController::class,'update'])->name('badge.update');
        Route::delete('/badge/{id}', [BadgeController::class,'destroy'])->name('badge.destroy');

        //EXPORT
        Route::get('/master-list-export', [UserCRUD::class,'master_list_export'])->name('master-list-export');

    });

});



