<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserCRUD extends Controller
{
     //Create new users (registration)
     function create(Request $request){
        //validate Inputs
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:30',
            'confirm-password'=>'required|min:5|max:30|same:password',
            'age'=>'required|min:1|max:5',
            'gender'=>'required|in:Female,Male',
            'religion'=>'required',
            'student_bloodtype'=>'required|in: A+,O+,B+,AB+,A-,O-,B-,AB-,Unknown',
            'guardian'=>'required',
            'contact_number'=>'required',
            'relation'=>'required',
            'guardian_bloodtype'=>'required|in: A+,O+,B+,AB+,A-,O-,B-,AB-,Unknown',
            'address'=>'required',
            
        ]);

        //Insert User in table
        $user = new User();
          $user->name = $request->name;
          $user->email = $request->email;
          $user->password = \Hash::make($request->password);
          $user->age = $request->age;
          $user->gender = $request->gender;
          $user->religion = $request->religion;
          $user->student_bloodtype = $request->student_bloodtype;
          $user->guardian = $request->guardian;
          $user->contact_number = $request->contact_number;
          $user->relation = $request->relation;
          $user->guardian_bloodtype = $request->guardian_bloodtype;
          $user->address = $request->address;
          $save = $user->save();

          if( $save ){
              return redirect()->back()->with('success','You are now registered successfully');
          }else{
              return redirect()->back()->with('fail','Something went wrong, failed to register');
        }
    }

   
 
    //Retrieve Data
     function index(){
        $users = User::all();
        return view('admin.student-tab',compact('users'));
    }


    //Destroy Data
    function destroy($id){
        $users = User::find($id);
        $users -> delete();
        return redirect()->route('admin.student-tab'); 
    }


    //Edit button
    function edit($id){
        $user = User::find($id);
        return view('admin.student-management.edit',compact('user'));
    }

    //Update Data
    function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'email'=>"required|email|unique:users,email,$id",
            'password'=>'required|min:5|max:30',
            'confirm-password'=>'required|min:5|max:30|same:password',
            'age'=>'required',
            'gender'=>'required|in:Female,Male',
            'religion'=>'required',
            'student_bloodtype'=>'required|in: A+,O+,B+,AB+,A-,O-,B-,AB-,Unknown',
            'guardian'=>'required',
            'contact_number'=>'required',
            'relation'=>'required',
            'guardian_bloodtype'=>'required|in: A+,O+,B+,AB+,A-,O-,B-,AB-,Unknown',
            'address'=>'required',
    ]);

        //Insert Updates User in table
        $user =  User::find($id);
          $user->name = $request->name;
          $user->email = $request->email;
          $user->password = \Hash::make($request->password);
          $user->age = $request->age;
          $user->gender = $request->gender;
          $user->religion = $request->religion;
          $user->student_bloodtype = $request->student_bloodtype;
          $user->guardian = $request->guardian;
          $user->contact_number = $request->contact_number;
          $user->relation = $request->relation;
          $user->guardian_bloodtype = $request->guardian_bloodtype;
          $user->address = $request->address;
          $save = $user->save();

          if( $save ){
              return redirect()->route('admin.student-tab');
          }else{
              return redirect()->back()->with('fail','Something went wrong, failed to update');
        }
    }
}
