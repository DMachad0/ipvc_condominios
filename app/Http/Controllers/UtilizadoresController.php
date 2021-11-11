<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UtilizadoresController extends Controller
{
    public function adminHome()
    {
        if(Auth::check()){
            $users = DB::table('users')->get();

            return view('admin.utilizadores', ['users' => $users]);
        }
  
        return redirect("login");  
    }   
}
