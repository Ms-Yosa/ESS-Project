<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Faculty;
use Illuminate\Support\Facades\Auth;

class FacultyController extends Controller
{
    function create(Request $request){
          //Validate inputs
          $request->validate([
             'name'=>'required',
             'email'=>'required|email|unique:faculties,email',
             'password'=>'required|min:5|max:30',
             'cpassword'=>'required|min:5|max:30|same:password'
          ]);

          $faculty = new Faculty();
          $faculty->name = $request->name;
          $faculty->email = $request->email;
          $faculty->password = \Hash::make($request->password);
          $save = $faculty->save();

          if( $save ){
              return redirect()->back()->with('success','You are now registered successfully as Faculty');
          }else{
              return redirect()->back()->with('fail','Something went Wrong, failed to register');
          }
    }

    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:faculties,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists in faculties table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('faculty')->attempt($creds) ){
            return redirect()->route('faculty.home');
        }else{
            return redirect()->route('faculty.login')->with('fail','Incorrect Credentials');
        }
    }

    function logout(){
        Auth::guard('faculty')->logout();
        return redirect('/');
    }
}
