<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;
use App\Models\Classes;
use App\Models\Faculty;
use Illuminate\Support\Facades\Auth;

use Brian2694\Toastr\Facades\Toastr;

class UserCRUD extends Controller
{
     //Create new users (registration)
     function create(Request $request){
        //validate Inputs
        $request->validate([
            'surname'=>'required',
            'name'=>'required',
            'middle_name'=>'nullable|string',
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
            'guardian_middle_name'=>'nullable|string',
            'contact_number'=>'required',
            'relation'=>'required',
            'guardian_bloodtype'=>'required|in: A+,O+,B+,AB+,A-,O-,B-,AB-,Unknown',
            'address'=>'required',
            'class_id'=>'required'

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
          $user->class_id = $request->class_id;
          $save = $user->save();

          if( $save ){
            Toastr::success('New student has been registered successfully','Success');
              return redirect()->route('admin.student-tab');
            //   return redirect()->route('admin.admin-tab')->with('success','New admin has been registered successfully');
          }else{
            Toastr::error('Something went wrong, failed to register', 'Error');
              return redirect()->back();
            //   return redirect()->back()->with('fail','Something went wrong, failed to register');
        }

        //   if( $save ){
        //       return redirect()->route('admin.student-tab')->with('success','New Student has been registered successfully');
        //   }else{
        //       return redirect()->back()->with('fail','Something went wrong, failed to register');
        // }

    }



    //Retrieve Data
     function index(Request $request){
        $users = User::with('classAssigned')->get();
        //dd($users->toArray());
        return view('admin.student-tab', compact('users'));
    }

    //Pass class table
    function register(Request $request){
        $users = User::with('classAssigned')->get();
        $class = Classes::with('getStudents','getInstructor','faculty')->get();
        $faculty = Faculty::all();
        $user = DB::table('users')->select(
            // 'subjects.*',
            'classes.*'
            )
            ->join('classes','classes.class_id', '=', 'users.class_id' )
            // ->join('faculties','faculties.faculty_id', '=', 'class_schedulings.faculty_id' )
            ->get();
        return view('admin.student-management.register', compact('class','faculty'))
        ->with('users', $users);
    }


    //Destroy Data
    function destroy($id){
        $users = User::find($id);
        $delete = $users -> delete();

        if( $delete ){
            Toastr::success('Account has been deleted successfully','Success');
            return redirect()->route('admin.student-tab');
            // return redirect()->route('admin.admin-tab')->with('success','Account has been deleted successfully');
        }else{
            Toastr::error('Something went wrong, failed to delete', 'Error');
            return redirect()->back();
            // return redirect()->back()->with('fail','Something went wrong, failed to delete');
      }

    //     if( $delete ){
    //         return redirect()->route('admin.student-tab')->with('success','Account has been deleted successfully');
    //     }else{
    //         return redirect()->back()->with('fail','Something went wrong, failed to delete');
    //   }
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
            'middle_name'=>'nullable|string',
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
            'guardian_middle_name'=>'nullable|string',
            'contact_number'=>'required',
            'relation'=>'required',
            'guardian_bloodtype'=>'required|in: A+,O+,B+,AB+,A-,O-,B-,AB-,Unknown',
            'address'=>'required',
            'class_id'=>'required'
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
          $user->class_id = $request->class_id;
          $save = $user->save();

          if( $save ){
            Toastr::success('Update Information Successfully','Success');
            return redirect()->route('admin.student-tab');
            // return redirect()->route('admin.admin-tab')->with('success','Update Information Successfully');
        }else{
            Toastr::error('Something went wrong, failed to update', 'Error');
            return redirect()->back();
            // return redirect()->back()->with('fail','Something went wrong, failed to update');
    }

    //       if( $save ){
    //         return redirect()->route('admin.student-tab')->with('success','Update Information Successfully');
    //     }else{
    //         return redirect()->back()->with('fail','Something went wrong, failed to update');
    // }
}

}