<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UtilizadoresController extends Controller
{
    public function utilizadores()
    {
        if(Auth::check()){
            return view('utilizadores.home');
        }
  
        return redirect("login");  
    }   
}
