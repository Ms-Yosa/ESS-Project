<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Faculty;
use Illuminate\Support\Facades\Auth;

class FacultyController extends Controller
{

    //Create new faculty (registration)
    function create(Request $request){
        //validate Inputs
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:faculties,email',
            'password'=>'required|min:5|max:30',
            'confirm-password'=>'required|min:5|max:30|same:password'
        ]);

        //Insert Faculties in table
        $faculty = new Faculty();
          $faculty->name = $request->name;
          $faculty->email = $request->email;
          $faculty->password = \Hash::make($request->password);
          $save = $faculty->save();

          if( $save ){
              return redirect()->back()->with('success','You are now registered successfully as Faculty');
          }else{
              return redirect()->back()->with('fail','Something went wrong, failed to register');
        }
    }

    //Authorized access (Login)

    function check(Request $request){
        //Validate inputs
        $request->validate([
           'email'=>'required|email|exists:faculties,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists on faculties table'
        ]);

        $creds = $request->only('email','password');
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

