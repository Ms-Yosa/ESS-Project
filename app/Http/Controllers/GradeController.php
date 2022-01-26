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

        //dd($subject->toArray());
        return view('grade.index', compact('user'))->with('subject', $subject);
    }

    /**
     * Store a newly created Grade in storage.
     *
     * @param CreateGradeRequest $request
     *
     * @return Response
     */
    public function store(CreateGradeRequest $request)
    {
        $input = $request->all();

        $grade = $this->gradeRepository->create($input);

        Flash::success('Grade saved successfully.');

        return redirect()->back();
    }
}

