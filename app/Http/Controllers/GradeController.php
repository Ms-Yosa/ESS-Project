<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGradeRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subject;
use App\Models\Grade;
use Illuminate\Support\Facades\Auth;
use Flash;
use Response;

class GradeController extends Controller
{

    public function index($subArea_id, $student_id)
    {
        $subject = Subject::where('subArea_id', $subArea_id)->with('subArea')->get();
        $user = User::find($student_id);
        $grade = Grade::where(['user_id' => $student_id, 'subArea_id' => $subArea_id] )->with('user','subArea','subject')->get();

        if($subject){
            $exist = true;
        }
        //dd($subject->toArray());
        return view('grade.index')
                    ->with('grade', $grade)
                    ->with('subject', $subject)
                    ->with('exist', $exist)
                    ->with('user', $user);
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

    public function edit($subj_id, $student_id)
    {
        $grade = Grade::where(['subject_id' => $subj_id,'user_id' => $student_id, ])->with('subArea','subject')->first();
        //dd($grade->toArray());
        if (empty($grade)) {
            Flash::error('Subject Area not found');

            return redirect()->back()->with('fail','Something went wrong, failed to edit');}

        return view('grade.edit')->with('grade', $grade);
    }

    public function update(Request $request, $subj_id, $student_id,$grade_id)
    {
        $subject = Subject::find($subj_id);
        $user = User::where('id', $student_id)->get();
        $grade = Grade::find($grade_id);
        //dd($grade->toArray());

        $grade->first_period = $request->first_period;
        $grade->second_period = $request->second_period;
        $grade->third_period = $request->third_period;
        $grade->fourth_period = $request->fourth_period;
        $grade->final_rating = $request->final_rating;
        $grade->subject_id = $subj_id;
        $grade->user_id = $student_id;
        if($request->subArea_id){
            $grade->subArea_id = $request->subArea_id;
        }
        $grade->save();

        if (empty($grade)) {
            Flash::error('Subject Area not found');

            return redirect()->back()->with('fail','Something went wrong, failed to edit');
        }

        Flash::success('Subject Area updated successfully.');

        return redirect(route('faculty.grade', ['subArea_id'=>$subject->subArea_id,'student_id'=>$student_id]))->with('subject', $subject)->with('user', $user);
    }
}

