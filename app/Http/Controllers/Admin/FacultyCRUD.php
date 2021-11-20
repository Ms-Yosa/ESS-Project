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
            'email'=>'required|email|unique:faculties,email',
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
          $faculty->surname = $request->surname;
          $faculty->name = $request->name;
          $faculty->middle_name = $request->middle_name;
          $faculty->email = $request->email;
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
              return redirect()->back()->with('success','New Faculty has been registered successfully!');
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
            $faculty->surname = $request->surname;
            $faculty->name = $request->name;
            $faculty->middle_name = $request->middle_name;
            $faculty->email = $request->email;
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
                return redirect()->back()->with('success','Update Information Successfully');
            }else{
                return redirect()->back()->with('fail','Something went wrong, failed to update');
        }
    }


}
