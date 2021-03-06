<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentAttendance;
use App\Models\User;                     
use App\Models\Classes;                     
use Carbon\Carbon;
use DB;

class StudentAttendanceController extends Controller
{
    //

    public function create(Request $request)
    {
        $user_id = $request->id;
        $status = $request->status;
        $description = $request->description;

        for($i=0; $i<count($user_id); $i++){
            $datasave = [
                'date' => Carbon::now()->toDateTimeString(),
                'user_id' =>$user_id[$i],
                'status' => $status[$i],
                'description' => $description[$i],
            ];

            if( DB::table('student_attendance')->insert($datasave) ){
                        return redirect()->back()->with('success','Recorded Successfully');
                    }else{
                        return redirect()->back()->with('fail','Something went wrong, failed to record');
                  }
        }

        return redirect()->back();

        

    }
}
