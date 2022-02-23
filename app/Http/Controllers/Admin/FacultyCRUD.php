<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Faculty;
use App\Models\Classes;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;

class FacultyCRUD extends Controller
{

     //Create new faculty (registration)
     function create(Request $request){
        //validate Inputs
        $request->validate([

            'faculty_surname'=>'required',
            'faculty_name'=>'required',
            'faculty_middle_name'=>'nullable|string',
            'faculty_email'=>'required|email|unique:faculties,faculty_email',
            'password'=>'required|min:5|max:30',
            'confirm-password'=>'required|min:5|max:30|same:password',
            'gender'=>'required|in:Female,Male',
            'birth_year'=>'required|in: 1999,1998,1997,1998,1997,1996,1995,1994,1993,1992,1991,1990,1989,1988,1987,1986,1985,1984,1983,192,1981,1980,1979,1978,1977,1976,1975,1974',
            'birth_month'=>'required|in: January,February,March,April,May,June,July,August,September,October,November,December',
            'birth_day'=>'required|in:1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31',
            'age'=>'required|min:1|max:5',
            'bloodtype'=>'required|in: A+,O+,B+,AB+,A-,O-,B-,AB-,Unknown',
            'contact_number'=>'required',
            'address'=>'required',
        ]);

        //Insert Faculties in table
        $faculty = new Faculty();
          $faculty->faculty_surname = $request->faculty_surname;
          $faculty->faculty_name = $request->faculty_name;
          $faculty->faculty_middle_name = $request->faculty_middle_name;
          $faculty->faculty_email = $request->faculty_email;
          $faculty->password = \Hash::make($request->password);
          $faculty->gender = $request->gender;
          $faculty->birth_year = $request->birth_year;
          $faculty->birth_month = $request->birth_month;
          $faculty->birth_day = $request->birth_day;
          $faculty->age = $request->age;
          $faculty->bloodtype = $request->bloodtype;
          $faculty->contact_number = $request->contact_number;
          $faculty->address = $request->address;
          $save = $faculty->save();

          if( $save ){
            Toastr::success('New faculty has been registered successfully','Success');
              return redirect()->route('admin.faculty-tab');
            //   return redirect()->route('admin.admin-tab')->with('success','New admin has been registered successfully');
          }else{
            Toastr::error('Something went wrong, failed to register', 'Error');
              return redirect()->back();
            //   return redirect()->back()->with('fail','Something went wrong, failed to register');

        //   if( $save ){
        //       return redirect()->route('admin.faculty-tab')->with('success','New Faculty has been registered successfully!');
        //   }else{
        //       return redirect()->back()->with('fail','Something went wrong, failed to register');
        }
    }



     //Retrieve Data
     function index(){
        $faculty = Faculty::with('getClass')->get();
        return view('admin.faculty-tab') ->with('faculty', $faculty);
    }

     //Destroy Data
     function destroy($id){
        $faculties = Faculty::find($id);
        $delete = $faculties -> delete();

        if( $delete ){
            Toastr::success('Account has been deleted successfully','Success');
            return redirect()->route('admin.faculty-tab');
            // return redirect()->route('admin.admin-tab')->with('success','Account has been deleted successfully');
        }else{
            Toastr::error('Something went wrong, failed to delete', 'Error');
            return redirect()->back();
            // return redirect()->back()->with('fail','Something went wrong, failed to delete');
      }

    //     if( $delete ){
    //         return redirect()->route('admin.faculty-tab')->with('success','Account has been deleted successfully');
    //     }else{
    //         return redirect()->back()->with('fail','Something went wrong, failed to delete');
    //   }
    }


    //Edit button
    function edit($id){
        $faculty = Faculty::find($id);
        return view('admin.faculty-management.edit',compact('faculty'));
    }

    //Update Data
    function update(Request $request, $id){
        $request->validate([
            'faculty_surname'=>'required',
            'faculty_name'=>'required',
            'faculty_middle_name'=>'nullable|string',
            'faculty_email'=>"required|email|unique:faculties,faculty_email,$id",
            'password'=>'required|min:5|max:30',
            'confirm-password'=>'required|min:5|max:30|same:password',
            'gender'=>'required|in:Female,Male',
            'birth_year'=>'required|in:1999,1998,1997,1998,1997,1996,1995,1994,1993,1992,1991,1990,1989,1988,1987,1986,1985,1984,1983,192,1981,1980,1979,1978,1977,1976,1975,1974',
            'birth_month'=>'required|in:January,February,March,April,May,June,July,August,September,October,November,December',
            'birth_day'=>'required|in:1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31',
            'age'=>'required|min:1|max:5',
            'bloodtype'=>'required|in: A+,O+,B+,AB+,A-,O-,B-,AB-,Unknown',
            'contact_number'=>'required',
            'address'=>'required',
    ]);

        //Insert Updates Faculty Info in table
        $faculty =  Faculty::find($id);
            $faculty->faculty_surname = $request->faculty_surname;
            $faculty->faculty_name = $request->faculty_name;
            $faculty->faculty_middle_name = $request->faculty_middle_name;
            $faculty->faculty_email = $request->faculty_email;
            $faculty->password = \Hash::make($request->password);
            $faculty->gender = $request->gender;
            $faculty->birth_year = $request->birth_year;
            $faculty->birth_month = $request->birth_month;
            $faculty->birth_day = $request->birth_day;
            $faculty->age = $request->age;
            $faculty->bloodtype = $request->bloodtype;
            $faculty->contact_number = $request->contact_number;
            $faculty->address = $request->address;
            $save = $faculty->save();

            if( $save ){
                Toastr::success('Update Information Successfully','Success');
                return redirect()->route('admin.faculty-tab');
                // return redirect()->route('admin.admin-tab')->with('success','Update Information Successfully');
            }else{
                Toastr::error('Something went wrong, failed to update', 'Error');
                return redirect()->back();
                // return redirect()->back()->with('fail','Something went wrong, failed to update');
        }

        //     if( $save ){
        //         return redirect()->route('admin.faculty-tab')->with('success','Update Information Successfully');
        //     }else{
        //         return redirect()->back()->with('fail','Something went wrong, failed to update');
        // }
    }


}
