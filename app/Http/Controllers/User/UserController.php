<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

   
 
    //Logout
    function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }
   
}

