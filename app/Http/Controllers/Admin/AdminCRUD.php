<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminCRUD extends Controller
{
     //Create new faculty (registration)
     function create(Request $request){
        //validate Inputs
        $request->validate([

            'surname'=>'required',
            'name'=>'required',
            'middle_name'=>'required',
            'email'=>'required|email|unique:faculties,email',
            'password'=>'required|min:5|max:30',
            'confirm-password'=>'required|min:5|max:30|same:password',
            'gender'=>'required|in:Female,Male',
            'birth_year'=>'required|in:2020,2021',
            'birth_month'=>'required|in:April,May',
            'birth_day'=>'required|in:1,2',
            'age'=>'required|min:1|max:5',
            'bloodtype'=>'required|in: A+,O+,B+,AB+,A-,O-,B-,AB-,Unknown',
            'contact_number'=>'required',
            'address'=>'required',
        ]);

        //Insert Admin in table
        $admin = new Admin();
          $admin->surname = $request->surname;
          $admin->name = $request->name;
          $admin->middle_name = $request->middle_name;
          $admin->email = $request->email;
          $admin->password = \Hash::make($request->password);
          $admin->gender = $request->gender;
          $admin->birth_year = $request->birth_year;
          $admin->birth_month = $request->birth_month;
          $admin->birth_day = $request->birth_day;
          $admin->age = $request->age;
          $admin->bloodtype = $request->bloodtype;
          $admin->contact_number = $request->contact_number;
          $admin->address = $request->address;
          $save = $admin->save();

          if( $save ){
              return redirect()->back()->with('success','New Admin has been registered successfully');
          }else{
              return redirect()->back()->with('fail','Something went wrong, failed to register');
        }
    }

   

     //Retrieve Data
     function index(){
        $admins = Admin::all();
        return view('admin.admin-tab',compact('admins'));
    }

     //Destroy Data
     function destroy($id){
        $admins = Admin::find($id);
        $admins -> delete();
        return redirect()->route('admin.admin-tab'); 
    }


    //Edit button
    function edit($id){
        $admin = Admin::find($id);
        return view('admin.admin-management.edit',compact('admin'));
    }

    //Update Data
    function update(Request $request, $id){
        $request->validate([
            'surname'=>'required',
            'name'=>'required',
            'middle_name'=>'required',
            'email'=>"required|email|unique:faculties,email,$id",
            'password'=>'required|min:5|max:30',
            'confirm-password'=>'required|min:5|max:30|same:password',
            'gender'=>'required|in:Female,Male',
            'birth_year'=>'required|in:2020,2021',
            'birth_month'=>'required|in:April,May',
            'birth_day'=>'required|in:1,2',
            'age'=>'required|min:1|max:5',
            'bloodtype'=>'required|in: A+,O+,B+,AB+,A-,O-,B-,AB-,Unknown',
            'contact_number'=>'required',
            'address'=>'required',
    ]);

        //Insert Updates Faculty Info in table
        $admin =  Admin::find($id);
            $admin->surname = $request->surname;
            $admin->name = $request->name;
            $admin->middle_name = $request->middle_name;
            $admin->email = $request->email;
            $admin->password = \Hash::make($request->password);
            $admin->gender = $request->gender;
            $admin->birth_year = $request->birth_year;
            $admin->birth_month = $request->birth_month;
            $admin->birth_day = $request->birth_day;
            $admin->age = $request->age;
            $admin->bloodtype = $request->bloodtype;
            $admin->contact_number = $request->contact_number;
            $admin->address = $request->address;
            $save = $admin->save();

            if( $save ){
                return redirect()->back()->with('success','Update Information Successfully');
            }else{
                return redirect()->back()->with('fail','Something went wrong, failed to update');
        }
    }

}
