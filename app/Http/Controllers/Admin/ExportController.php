<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;
use App\Models\Classes;
use App\Models\Faculty;
use App\Models\SubArea;
use Illuminate\Support\Facades\Auth;

class ExportController extends Controller
{

    function student_master_list_export(){
        $users = User::with('classAssigned')->get();
        $pdf = PDF::loadView('exports.student-master-list', [
            'users'=> $users
        ]);
        return $pdf->download('student-master-list.pdf');
    }


    function faculty_master_list_export(){
        $faculty = Faculty::with('getClass')->get();
        $pdf = PDF::loadView('exports.faculty-master-list', [
            'faculty'=> $faculty
        ]);
        return $pdf->download('faculty-master-list.pdf');
    }

    function classes_master_list_export(){
        $classes = Classes::with('getInstructor','getSubArea')->get();
        $pdf = PDF::loadView('exports.classes-master-list', [
            'classes'=> $classes
        ]);
        return $pdf->download('classes-master-list.pdf');
    }

    function learning_area_master_list_export(){
        $subArea = SubArea::with('class','subjects')->get();
        $pdf = PDF::loadView('exports.learning-areas-master-list', [
            'subArea'=> $subArea
        ]);
        return $pdf->download('learning-areas-master-list.pdf');
    }

    // function report_card_export(){
    //     $users = User::with('classAssigned')->get();
    //     $pdf = PDF::loadView('exports.student-master-list', [
    //         'users'=> $users
    //     ]);
    //     return $pdf->download('student-master-list.pdf');
    // }
}