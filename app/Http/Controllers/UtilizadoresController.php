<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UtilizadoresController extends Controller
{
    public function adminHome()
    {
        if(Auth::check()){
            return view('admin.utilizadores');
        }
  
        return redirect("login");  
    }   
}
