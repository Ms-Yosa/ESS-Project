<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Badge;
use App\Models\BadgeTable;
use App\Models\User;
use App\Models\Classes;
use Flash;
use Response;

class BadgeGrantController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        $class = Classes::where('class_id', $user->class_id)->first();
        $studentBadges = BadgeTable::where('student_id', $id)->with('badge')->get();
        $badges = Badge::all();
        // dd($studentBadges->toArray());
        return view('badge.create')->with('badges', $badges)->with('user', $user)->with('class', $class)->with('studentBadges', $studentBadges);
    }

    public function create(Request $request, $id)
    {
        $input = $request->all();
        $user = User::find($id);
        $badges = Badge::all();
        if(!isset($input)){
            Toastr::error('Badge Granting failed. Please add a badge.','Failed');
            return view('badge.create')->with('badges', $badges)->with('user', $user);
        }
        else{
            foreach ($request->badge as $key => $n){
                $student_badge = new BadgeTable();
                $student_badge->student_id = $id;
                $student_badge->badge_id = $request->badge[$key];
                $student_badge->save();
            }

            Toastr::success('Badge Granted successfully','Success');

            return redirect(route('faculty.class_view',$user->class_id));
        }
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

