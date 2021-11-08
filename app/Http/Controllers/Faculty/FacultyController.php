<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Faculty;
use Illuminate\Support\Facades\Auth;

class FacultyController extends Controller
{

   

        //Logout

    function logout(){
        Auth::guard('faculty')->logout();
        return redirect('/');
    }
   
}

