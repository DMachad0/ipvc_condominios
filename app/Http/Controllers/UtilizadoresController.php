<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Hash;
use App\Models\User;

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

    public function adminEditarUser($id)
    {
        if(Auth::check()){
            $user = Auth::user();
            if ($user->tipo == "adm") {
                $userById = DB::select('select * from users where id = :id', ['id' => $id])[0];
                return view('admin.editar_utilizador', ['user' => $userById, 'id' => $id]);
            } else {
                return redirect("/");
            }
        }
  
        return redirect("login");  
    } 
    
    public function edit(array $data)
    {
        if (isset($data['password'])) {
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $pin = mt_rand(1000000, 9999999)
                . mt_rand(1000000, 9999999)
                . $characters[rand(0, strlen($characters) - 1)];

            $password_generate = str_shuffle($pin);

            \Mail::to('diogothbs@gmail.com')->send(new \App\Mail\EditarConta($data, $password_generate));

            return DB::table('users')
            ->where('id', $data['id'])
            ->update(['nome' => $data['nome'], 'email' => $data['email'], 'telefone' => $data['telefone'], 'cc' => $data['cc'], 'tipo' => $data['tipo'], 'password' => Hash::make($password_generate)]);
        } else {
            \Mail::to('diogothbs@gmail.com')->send(new \App\Mail\EditarConta($data, null));
            
            return DB::table('users')
            ->where('id', $data['id'])
            ->update(['nome' => $data['nome'], 'email' => $data['email'], 'telefone' => $data['telefone'], 'cc' => $data['cc'], 'tipo' => $data['tipo']]);
        }
    } 

    public function confirmarEditarUser(Request $request)
    {
        if(Auth::check()){
            $user = Auth::user();
            if ($user->tipo == "adm") {
                $request->validate([
                    'id' => 'required',
                    'nome' => 'required',
                    'email' => 'required|email',
                    'telefone' => 'required|min:9|max:9',
                    'cc' => 'required|min:8|max:8',
                    'tipo' => 'required',
                ]);
                   
                $data = $request->all();
                $check = $this->edit($data);
                 
                return redirect("/")->withSuccess('Conta criada com sucesso.');
            } else {
                return redirect("/");
            }
        }
  
        return redirect("/utilizadores");  
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

    public function confirmarNovoUtilizador(Request $request)
    {
        if(Auth::check()){
            $user = Auth::user();
            if ($user->tipo == "adm") {
                $request->validate([
                    'nome' => 'required',
                    'email' => 'required|email|unique:users',
                    'telefone' => 'required|min:9|max:9',
                    'cc' => 'required|min:8|max:8',
                    'tipo' => 'required',
                ]);
                   
                $data = $request->all();
                $check = $this->create($data);
                 
                return redirect("/")->withSuccess('Conta criada com sucesso.');
            } else {
                return redirect("/");
            }
        }
  
        return redirect("/utilizadores");  
    }   

    public function create(array $data)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];

        $password_generate = str_shuffle($pin);

        $details = [
            'nome' => $data['nome'],
            'email' => $data['email'],
            'password' => $password_generate
        ];

        \Mail::to('diogothbs@gmail.com')->send(new \App\Mail\NovaConta($details));

        return User::create([
            'nome' => $data['nome'],
            'email' => $data['email'],
            'password' => Hash::make($password_generate),
            'telefone' => $data['telefone'],
            'cc' => $data['cc'],
            'tipo' => $data['tipo'],
        ]);
    }  

    public function habitacoes()
    {  
        return view("admin_cond.habitacoes");  
    }

    public function proprietarios()
    {  
        return view("admin_cond.proprietarios");  
    }
    
    public function despesas()
    {  
        return view("admin_cond.despesas");  
    }   

    public function atas()
    {  
        return view("admin_cond.atas");  
    }   
}
