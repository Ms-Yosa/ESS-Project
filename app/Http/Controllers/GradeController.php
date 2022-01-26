<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubArea;
use App\Models\Subject;
use App\Models\Grade;
use Illuminate\Support\Facades\Auth;

class GradeController extends Controller
{

    public function index($subArea_id, $student_id)
    {
        $subject = Subject::where('subArea_id', $subArea_id)->with('subArea')->get();
        $grade = Grade::where('user_id', $student_id)->with('user')->get();

        //dd($subject->toArray());
        return view('faculty.encode-grade', compact('grade'))->with('subject', $subject);
    }
}

