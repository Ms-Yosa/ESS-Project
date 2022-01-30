<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGradeRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subject;
use App\Models\Grade;
use Illuminate\Support\Facades\Auth;

class GradeController extends Controller
{

    public function index($subArea_id, $student_id)
    {
        $subject = Subject::where('subArea_id', $subArea_id)->with('subArea')->get();
        $user = User::where('id', $student_id)->get();
        $grade = Grade::where(['user_id' => $student_id, 'subArea_id' => $subArea_id] )->get();

        //dd($subject->toArray());
        return view('grade.index', compact('user'))->with('subject', $subject);
    }

    public function create($subj_id, $student_id)
    {
        $subject = Subject::where('id', $subj_id)->with('subArea')->get();
        $user = User::where('id', $student_id)->get();

        //dd($subject->toArray());
        return view('grade.create', compact('user'))->with('subject', $subject);
    }

    /**
     * Store a newly created Grade in storage.
     *
     * @param CreateGradeRequest $request
     *
     * @return Response
     */
    public function store(Request $request, $subArea_id, $subj_id, $student_id)
    {
        // Add Grade
        $grade = new Grade;
        $grade->first_period = $request->input('first_period');
        $grade->second_period = $request->input('second_period');
        $grade->third_period = $request->input('third_period');
        $grade->fourth_period = $request->input('fourth_period');
        $grade->final_rating = $request->input('final_rating');
        $grade->subject_id = $subj_id;
        $grade->user_id = $student_id;
        $grade->subArea_id = $subArea_id;
        $save = $grade->save();

        if( $save ){
            return redirect()->route('faculty.grade',['subArea_id'=>$subArea_id,'student_id'=>$student_id])->with('success','New Grade has been registered successfully');
        }else{
            return redirect()->back()->with('fail','Something went wrong, failed to encode');
        }
    }
}

