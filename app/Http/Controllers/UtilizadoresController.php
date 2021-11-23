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

    public function adminNewUser()
    {
        if(Auth::check()){
            $user = Auth::user();
            if ($user->tipo == "adm") {
                return view('admin.novo_utilizador');
            } else {
                return redirect("/");
            }
        }
  
        return redirect("login");  
    }   

    public function confirmarNovoUtilizador()
    {
        if(Auth::check()){
            $user = Auth::user();
            if ($user->tipo == "adm") {
                $request->validate([
                    'name' => 'required',
                    'email' => 'required|email|unique:users',
                    'telefone' => 'required|min:9|max:9|confirmed',
                    'cc' => 'required|min:8|max:8|confirmed',
                    'tipo' => 'required|confirmed',
                ]);
                   
                $data = $request->all();
                $check = $this->create($data);
                 
                return redirect("/utilizadores")->withSuccess('Conta criada com sucesso.');
            } else {
                return redirect("/");
            }
        }
  
        return redirect("/utilizadores");  
    }   

    public function create(array $data)
    {
      return User::create([
        'nome' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'telefone' => $data['email'],
        'cc' => $data['email'],
        'tipo' => 'prop',
      ]);
    }  
}
