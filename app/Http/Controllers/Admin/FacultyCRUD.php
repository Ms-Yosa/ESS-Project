<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Faculty;
use Illuminate\Support\Facades\Auth;

class FacultyCRUD extends Controller
{
 
     //Create new faculty (registration)
     function create(Request $request){
        //validate Inputs
        $request->validate([

            'surname'=>'required',
            'name'=>'required',
            'middle_name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:30',
            'confirm-password'=>'required|min:5|max:30|same:password',
            'gender'=>'required|in:Female,Male',
            'age'=>'required|min:1|max:5',
            'bloodtype'=>'required|in: A+,O+,B+,AB+,A-,O-,B-,AB-,Unknown',
            'contact_number'=>'required',
            'address'=>'required',
        ]);

        //Insert Faculties in table
        $faculty = new Faculty();
          $faculty->surname = $request->surname;
          $faculty->middle_name = $request->middle_name;
          $faculty->name = $request->name;
          $faculty->email = $request->email;
          $faculty->password = \Hash::make($request->password);
          $faculty->gender = $request->gender;
          $faculty->age = $request->age;
          $faculty->bloodtype = $request->bloodtype;
          $faculty->contact_number = $request->contact_number;
          $faculty->address = $request->address;
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

}
