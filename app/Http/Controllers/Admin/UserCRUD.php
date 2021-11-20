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
            'surname'=>'required',
            'name'=>'required',
            'middle_name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:30',
            'confirm-password'=>'required|min:5|max:30|same:password',
            'age'=>'required|min:1|max:5',
            'gender'=>'required|in:Female,Male',
            'birth_year'=>'required|in: 2019,2018,2017,2016,2015,2014,2013,2012,2011,2010',
            'birth_month'=>'required|in: January,February,March,April,May,June,July,August,September,October,November,December',
            'birth_day'=>'required|in: 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31',
            'religion'=>'required',
            'student_bloodtype'=>'required|in: A+,O+,B+,AB+,A-,O-,B-,AB-,Unknown',
            'guardian_surname'=>'required',
            'guardian'=>'required',
            'guardian_middle_name'=>'required',
            'contact_number'=>'required',
            'relation'=>'required',
            'guardian_bloodtype'=>'required|in: A+,O+,B+,AB+,A-,O-,B-,AB-,Unknown',
            'address'=>'required',
            
        ]);

        //Insert User in table
        $user = new User();
          $user->surname = $request->surname;
          $user->name = $request->name;
          $user->middle_name = $request->middle_name;
          $user->email = $request->email;
          $user->password = \Hash::make($request->password);
          $user->age = $request->age;
          $user->gender = $request->gender;
          $user->birth_year = $request->birth_year;
          $user->birth_month = $request->birth_month;
          $user->birth_day = $request->birth_day;
          $user->religion = $request->religion;
          $user->student_bloodtype = $request->student_bloodtype;
          $user->guardian_surname = $request->guardian_surname;
          $user->guardian = $request->guardian;
          $user->guardian_middle_name = $request->guardian_middle_name;
          $user->contact_number = $request->contact_number;
          $user->relation = $request->relation;
          $user->guardian_bloodtype = $request->guardian_bloodtype;
          $user->address = $request->address;
          $save = $user->save();

          if( $save ){
              return redirect()->back()->with('success','New Student has been registered successfully');
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
            'surname'=>'required',
            'name'=>'required',
            'middle_name'=>'required',
            'email'=>"required|email|unique:users,email,$id",
            'password'=>'required|min:5|max:30',
            'confirm-password'=>'required|min:5|max:30|same:password',
            'age'=>'required',
            'gender'=>'required|in:Female,Male',
            'birth_year'=>'required|in: 2019,2018,2017,2016,2015,2014,2013,2012,2011,2010',
            'birth_month'=>'required|in: January,February,March,April,May,June,July,August,September,October,November,December',
            'birth_day'=>'required|in: 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31',
            'religion'=>'required',
            'student_bloodtype'=>'required|in: A+,O+,B+,AB+,A-,O-,B-,AB-,Unknown',
            'guardian_surname'=>'required',
            'guardian'=>'required',
            'guardian_middle_name'=>'required',
            'contact_number'=>'required',
            'relation'=>'required',
            'guardian_bloodtype'=>'required|in: A+,O+,B+,AB+,A-,O-,B-,AB-,Unknown',
            'address'=>'required',
    ]);

        //Insert Updated User in table
        $user =  User::find($id);
            $user->surname = $request->surname;
            $user->name = $request->name;
            $user->middle_name = $request->middle_name;
          $user->email = $request->email;
          $user->password = \Hash::make($request->password);
          $user->age = $request->age;
          $user->gender = $request->gender;
          $user->birth_year = $request->birth_year;
          $user->birth_month = $request->birth_month;
          $user->birth_day = $request->birth_day;
          $user->religion = $request->religion;
          $user->student_bloodtype = $request->student_bloodtype;
          $user->guardian_surname = $request->guardian_surname;
          $user->guardian = $request->guardian;
          $user->guardian_middle_name = $request->guardian_middle_name;          $user->contact_number = $request->contact_number;
          $user->relation = $request->relation;
          $user->guardian_bloodtype = $request->guardian_bloodtype;
          $user->address = $request->address;
          $save = $user->save();

          if( $save ){
            return redirect()->back()->with('success','Update Information Successfully');
        }else{
            return redirect()->back()->with('fail','Something went wrong, failed to update');
    }
    }
}
