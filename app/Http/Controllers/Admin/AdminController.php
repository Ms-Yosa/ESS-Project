<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function check(Request $request){
         //Validate Inputs
         $request->validate([
            'email'=>'required|email|exists:admins,email',
            'password'=>'required|min:5|max:30'
         ],[
             'email.exists'=>'This email is not exists in admins table'
         ]);

         $creds = $request->only('email','password');

         if( Auth::guard('admin')->attempt($creds) ){
             return redirect()->route('admin.home');
         }else{
             return redirect()->route('admin.login')->with('fail','Incorrect credentials');
         }
    }

    function logout(){
        Auth::guard('admin')->logout();
        return redirect('/');
    }

    // Sidebar Controller

    function adminTab(){
        Auth::guard('admin')->adminTab();
        return redirect() -> route('admin.admin-tab');
    }

    function studentTab(){
        Auth::guard('admin')->studentTab();
        return redirect() -> route('admin.student-tab');
    }
    function facultyTab(){
        Auth::guard('admin')->facultyTab();
        return redirect() -> route('admin.faculty-tab');
    }
    
    function classTab(){
        Auth::guard('admin')->classTab();
        return redirect() -> route('admin.class-tab');
    }
    
    function messageTab(){
        Auth::guard('admin')->messageTab();
        return redirect() -> route('admin.message-tab');
    }
    
    function calendarTab(){
        Auth::guard('admin')->calendarTab();
        return redirect() -> route('admin.calendar-tab');
    }
    

}
