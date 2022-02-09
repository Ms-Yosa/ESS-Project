<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Feedback;
use App\Models\User;
use Flash;
use Response;

class FeedbackController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        $feedback = Feedback::where('user_id', $id)->get();
        //dd($feedback->toArray());
        return view('feedback.index')->with('user', $user)->with('feedback', $feedback);
    }

    public function create(Request $request, $id)
    {
        $feedback = new Feedback();
        $feedback->week = $request->input('week');
        $feedback->description = $request->input('description');
        $feedback->user_id = $id;
        $feedback->save();

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

        return redirect(route('faculty.feedback',$feedback->user_id));

    }

    public function destroy($id)
    {
        $feedback = Feedback::find($id);
        $feedback -> delete();

        return redirect(route('faculty.feedback',$feedback->user_id));
    }
}
