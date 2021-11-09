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

   

     //Retrieve Data
     function index(){
        $faculties = Faculty::all();
        return view('admin.faculty-tab',compact('faculties'));
    }

     //Destroy Data
     function destroy($id){
        $faculties = Faculty::find($id);
        $faculties -> delete();
        return redirect()->route('admin.faculty-tab'); 
    }


    //Edit button
    function edit($id){
        $faculty = Faculty::find($id);
        return view('admin.faculty-management.edit',compact('faculty'));
    }


}
