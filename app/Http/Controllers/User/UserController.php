<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    //Create new users (registration)
    function create(Request $request){
        //validate Inputs
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:30',
            'confirm-password'=>'required|min:5|max:30|same:password',
            'age'=>'required',
            
        ]);

        //Insert User in table
        $user = new User();
          $user->name = $request->name;
          $user->email = $request->email;
          $user->password = \Hash::make($request->password);
          $user->age = $request->age;
          $save = $user->save();

          if( $save ){
              return redirect()->back()->with('success','You are now registered successfully');
          }else{
              return redirect()->back()->with('fail','Something went wrong, failed to register');
        }
    }

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

    //Retrieve Data

     function index(){

        $users = User::all();
        return view('dashboard.admin.student-tab',compact('users'));
    }

    //Delete Data

    function destroy($id){
        $users = User::find($id);
        $users -> delete();
        return redirect()->route('admin.student-tab');    
    }

    //Edit button

    function edit($id){
        $user = User::find($id);
        return view('dashboard.user.edit',compact('user'));
    }

    //Update Data

    function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:30',
            'confirm-password'=>'required|min:5|max:30|same:password',
            'age'=>'required',
    ]);



        //Insert Updates User in table
        $user =  User::find($id);
          $user->name = $request->name;
          $user->email = $request->email;
          $user->password = \Hash::make($request->password);
          $user->age = $request->age;
          $save = $user->save();

          if( $save ){
              return redirect()->route('admin.student-tab');
          }else{
              return redirect()->back()->with('fail','Something went wrong, failed to update');
        }
    }

    
    //Logout

    function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }
   
}

