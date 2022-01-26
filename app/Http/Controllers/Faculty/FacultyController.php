<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Faculty;
use App\Models\Classes;
use App\Models\SubArea;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;

class FacultyController extends Controller
{

    //Authorized access (Login)

    function check(Request $request){
        //Validate inputs
        $request->validate([
           'faculty_email'=>'required|email|exists:faculties,faculty_email',
           'password'=>'required|min:5|max:30'
        ],[
            'faculty_email.exists'=>'This email is not exists on faculties table'
        ]);

        $creds = $request->only('faculty_email','password');
        if( Auth::guard('faculty')->attempt($creds) ){ // validate matchesif the creds are matched
            return redirect()->route('faculty.home');
        }else{
            return redirect()->route('faculty.login')->with('fail','Mismatched credentials!');
        }
    }

    public function classes(Request $request)
    {
        $classes = Faculty::with('getClass')->get();

        //dd($classes->toArray());

        return view('faculty.classes')->with('classes', $classes);
    }

    public function class_view($id)
    {
        $class = Classes::where('class_id', $id)->with('getStudents','getSubArea')->get();
        //dd($subject->toArray());
        return view('faculty.view-class')->with('class', $class);
    }

    public function gradeMarking($id,$subArea_id)
    {
        $class = Classes::where('class_id', $id)->with('getStudents','getSubArea')->get();
        $subject = SubArea::where('id', $subArea_id)->with('subjects','class')->get();
        //dd($subject->toArray());
        return view('faculty.marking', compact('subject'))->with('class', $class);
    }

    function profile($id){
        $faculty = Faculty::find($id);
        //dd($class->toArray());
            // dd($user);die;
        return view('faculty.profile')
        ->with('faculty', $faculty);
    }

        //Logout

    function logout(){
        Auth::guard('faculty')->logout();
        return redirect('/');
    }

}

