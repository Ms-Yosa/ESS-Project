<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;

class AdminCRUD extends Controller
{
     //Create new admin (registration)
     function create(Request $request){
        //validate Inputs
        $request->validate([

            'surname'=>'required',
            'name'=>'required',
            'middle_name'=>'nullable|string',
            'email'=>'required|email|unique:admins,email',
            'password'=>'required|min:5|max:30',
            'confirm-password'=>'required|min:5|max:30|same:password',
            'gender'=>'required|in:Female,Male',
            'birth_year'=>'required|in:1999,1998,1997,1998,1997,1996,1995,1994,1993,1992,1991,1990,1989,1988,1987,1986,1985,1984,1983,192,1981,1980,1979,1978,1977,1976,1975,1974',
            'birth_month'=>'required|in:January,February,March,April,May,June,July,August,September,October,November,December',
            'birth_day'=>'required|in:1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31',
            'age'=>'required|min:1|max:5',
            'bloodtype'=>'required|in: A+,O+,B+,AB+,A-,O-,B-,AB-,Unknown',
            'contact_number'=>'required|numeric',
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
            Toastr::success('New admin has been registered successfully','Success');
              return redirect()->route('admin.admin-tab');
            //   return redirect()->route('admin.admin-tab')->with('success','New admin has been registered successfully');
          }else{
            Toastr::error('Something went wrong, failed to register', 'Error');
              return redirect()->back();
            //   return redirect()->back()->with('fail','Something went wrong, failed to register');
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
        $delete = $admins -> delete();

        if( $delete ){
            Toastr::success('Account has been deleted successfully','Success');
            return redirect()->route('admin.admin-tab');
            // return redirect()->route('admin.admin-tab')->with('success','Account has been deleted successfully');
        }else{
            Toastr::error('Something went wrong, failed to delete', 'Error');
            return redirect()->back();
            // return redirect()->back()->with('fail','Something went wrong, failed to delete');
      }
        
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
            'middle_name'=>'nullable|string',
            'email'=>"required|email|unique:admins,email,$id",
            'password'=>'required|min:5|max:30',
            'confirm-password'=>'required|min:5|max:30|same:password',
            'gender'=>'required|in:Female,Male',
            'birth_year'=>'required|in:1999,1998,1997,1998,1997,1996,1995,1994,1993,1992,1991,1990,1989,1988,1987,1986,1985,1984,1983,192,1981,1980,1979,1978,1977,1976,1975,1974',
            'birth_month'=>'required|in:January,February,March,April,May,June,July,August,September,October,November,December',
            'birth_day'=>'required|in:1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31',
           'age'=>'required|min:1|max:5',
            'bloodtype'=>'required|in: A+,O+,B+,AB+,A-,O-,B-,AB-,Unknown',
            'contact_number'=>'required|numeric',
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
                Toastr::success('Update Information Successfully','Success');
                return redirect()->route('admin.admin-tab');
                // return redirect()->route('admin.admin-tab')->with('success','Update Information Successfully');
            }else{
                Toastr::error('Something went wrong, failed to update', 'Error');
                return redirect()->back();
                // return redirect()->back()->with('fail','Something went wrong, failed to update');
        }
    }

}
