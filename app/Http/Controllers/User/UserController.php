<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Classes;
use App\Models\Faculty;
use Illuminate\Support\Facades\DB;
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

    function profile($id){
        $users = User::find($id);
        $userJoin = DB::table('users')->select(
            'users.*',
            'faculties.id',
            'faculties.faculty_name',
            'faculties.faculty_surname',
            'faculties.faculty_middle_name',
            'classes.*'
            )
            ->leftJoin('classes','users.class_id', '=', 'classes.class_id' )
            ->join('faculties','faculties.id', '=', 'classes.faculty_id' )
            ->get();
            // dd($user);die;
        return view('user.student-profile', compact('userJoin'))
        ->with('users', $users);;
    }

}

