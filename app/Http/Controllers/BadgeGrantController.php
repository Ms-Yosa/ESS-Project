<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Badge;
use App\Models\BadgeTable;
use App\Models\User;
use Flash;
use Response;

class BadgeGrantController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        $badges = Badge::all();
        //dd($feedback->toArray());
        return view('badge.create')->with('badges', $badges)->with('user', $user);
    }

    public function create(Request $request, $id)
    {
        $user = User::find($id);
        $badges = Badge::all();
        foreach ($request->badge as $key => $n){
            $student_badge = new BadgeTable();
            $student_badge->student_id = $id;
            $student_badge->badge_id = $request->badge[$key];
            $student_badge->save();
        }

        return view('badge.create')->with('badges', $badges)->with('user', $user);
    }

    // public function edit($id){
    //     $feedback = Feedback::find($id);
    //     return view('feedback.edit')->with('feedback', $feedback);
    // }

    // public function update(Request $request,$user_id,$id){
    //     $feedback = Feedback::find($id);

    //     $feedback->week = $request->week;
    //     $feedback->description = $request->description;
    //     $feedback->user_id = $user_id;
    //     $feedback->save();

    //     return redirect(route('faculty.feedback',$feedback->user_id));

    // }

    // public function destroy($id)
    // {
    //     $feedback = Feedback::find($id);
    //     $feedback -> delete();

    //     return redirect(route('faculty.feedback',$feedback->user_id));
    // }
}

