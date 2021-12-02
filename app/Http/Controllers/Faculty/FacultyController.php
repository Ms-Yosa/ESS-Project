<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Faculty;
use App\Models\Classes;
use Illuminate\Support\Facades\Auth;

class FacultyController extends Controller
{

    //Authorized access (Login)

    function check(Request $request){
        //Validate inputs
        $request->validate([
           'faculty_email'=>'required|email|exists:faculties,faculty_email',
           'password'=>'required|min:5|max:30'
        ],[
            'faculty_email.exists'=>'This email is not exists on faculties table'
        ]);

        $creds = $request->only('faculty_email','password');
        if( Auth::guard('faculty')->attempt($creds) ){ // validate matchesif the creds are matched
            return redirect()->route('faculty.home');
        }else{
            return redirect()->route('faculty.login')->with('fail','Mismatched credentials!');
        }
    }

        //Logout

    function logout(){
        Auth::guard('faculty')->logout();
        return redirect('/');
    }

}

