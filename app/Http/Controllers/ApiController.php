<?php

namespace App\Http\Controllers;

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
}
