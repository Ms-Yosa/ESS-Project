<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

     //Authorized access (Login)

     function check(Request $request){
        //Validate inputs
        $request->validate([
           'email'=>'required|email|exists:users,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists on students table'
        ]);

        $creds = $request->only('email','password');
        if( Auth::guard('web')->attempt($creds) ){ // validate matches if the creds are matched
            return redirect()->route('user.home');
        }else{
            return redirect()->route('user.login')->with('fail','Mismatched credentials!');
        }
    }
   
 
    //Logout
    function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }
   
}

