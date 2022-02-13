<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Feedback;
use App\Models\User;
use App\Models\Classes;
use Flash;
use Response;

class FeedbackController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        $class = Classes::where('class_id', $user->class_id)->first();
        $feedback = Feedback::where('user_id', $id)->get();
        //dd($class->toArray());
        return view('feedback.index')->with('user', $user)->with('feedback', $feedback)->with('class', $class);
    }

    public function create(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'week' => 'required|integer',
        ]);
        //dd($request->all());
        $feedback = new Feedback();
        $feedback->week = $request->input('week');
        $feedback->description = $request->input('description');
        $feedback->user_id = $id;
        $feedback->save();

        Toastr::success('Feedback added successfully','Success');

        return redirect(route('faculty.feedback',$id));

    }

    public function edit($id){
        $feedback = Feedback::find($id);
        return view('feedback.edit')->with('feedback', $feedback);
    }

    public function update(Request $request,$user_id,$id){
        $feedback = Feedback::find($id);

        $feedback->week = $request->week;
        $feedback->description = $request->description;
        $feedback->user_id = $user_id;
        $feedback->save();

        Toastr::success('Feedback updated successfully','Success');

        return redirect(route('faculty.feedback',$feedback->user_id));

    }

    public function destroy($id)
    {
        $feedback = Feedback::find($id);

        try {
            $feedback -> delete();
            Toastr::success('Feedback deleted successfully','Success');
        } catch (QueryException $e) {
            Toastr::error('Feedback delete failed.','Failed');
        }

        return redirect(route('faculty.feedback',$feedback->user_id));
    }
}

