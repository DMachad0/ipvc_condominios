<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function admins()
    {
      return DB::table('users')->where('tipo', '=', 'adm')->get();
    }

    public function admins_cond()
    {
      return DB::table('users')->where('tipo', '=', 'adm_cond')->get();
    }

    public function props()
    {
      return DB::table('users')->where('tipo', '=', 'prop')->get();
    }

    public function meus_condominios()
    {
      $user = Auth::user();
      return DB::table('condominios')
                ->where('id_user', '=', $user->id)
                ->get();
    }
}
