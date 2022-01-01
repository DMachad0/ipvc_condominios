<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Hash;
use App\Models\User;

class UtilizadoresController extends Controller
{
    private function gerarPw() {
        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randompass = substr(str_shuffle($data), 0, 8);
        return $randompass;
    }

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
            $newPw = $this->gerarPw();

            \Mail::to('diogothbs@gmail.com')->send(new \App\Mail\EditarConta($data, $newPw));

            return DB::table('users')
            ->where('id', $data['id'])
            ->update(['nome' => $data['nome'], 'email' => $data['email'], 'telefone' => $data['telefone'], 'cc' => $data['cc'], 'tipo' => $data['tipo'], 'password' => Hash::make($newPw)]);
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

    public function confirmarSelecionarCondominio(Request $request)
    {
        if(Auth::check()){
            $user = Auth::user();
            if ($user->tipo == "adm_cond") {
                $request->validate([
                    'condominio' => 'required'
                ]);
                $data = $request->all();

                Session::put('condominio', $data['condominio']);
                return redirect("/habitacoes");
            } else {
                return redirect("/login");
            }
        }
  
        return redirect("/login");  
    }   

    public function create(array $data)
    {
        $newPw = $this->gerarPw();
        $details = [
            'nome' => $data['nome'],
            'email' => $data['email'],
            'password' => $newPw
        ];

        \Mail::to('diogothbs@gmail.com')->send(new \App\Mail\NovaConta($details));

        return User::create([
            'nome' => $data['nome'],
            'email' => $data['email'],
            'password' => Hash::make($newPw),
            'telefone' => $data['telefone'],
            'cc' => $data['cc'],
            'tipo' => $data['tipo'],
        ]);
    }  

    public function habitacoes()
    {  
        $idCondominio = Session::get('condominio');
        if ($idCondominio) {
            $condominioAtual = DB::table('condominios')
            ->where('id', $idCondominio)
            ->get()[0];
            return view("admin_cond.habitacoes", ["condominioAtual" => $condominioAtual]);
        } else {
            return redirect("/");
        }
    }

    public function novaHabitacao()
    {
        if(Auth::check()){
            $user = Auth::user();
            if ($user->tipo == "adm_cond") {
                $condominios = DB::table('condominios')
                ->where('id_user', '=', $user->id)
                ->get();
                $tipoHabitacoes = DB::table('tipo_habitacao')
                ->get();
                return view('admin_cond.nova_habitacao', ["condominios" => $condominios, "tipoHabitacoes" => $tipoHabitacoes]);
            } else {
                return redirect("/");
            }
        }
  
        return redirect("login");  
    }

    public function confirmarNovaHabitacao(Request $request)
    {
        if(Auth::check()){
            $user = Auth::user();
            if ($user->tipo == "adm_cond") {
                $request->validate([
                    'condominio' => 'required',
                    'portaria' => 'required',
                    'tipoHabitacao' => 'required',
                    'email' => 'required|email',
                    'cc' => 'required|min:8|max:8',
                    'nome' => 'required',
                    'telefone' => 'required',          
                ]); 
                $data = $request->all();
                
                $novoProprietario = DB::table('users')->where('cc', $data["cc"])->get();
                if ($novoProprietario->count() == 1) {
                    DB::table('habitacoes')->insert([
                        'id_user' => $novoProprietario[0]->id,
                        'id_condominio' => $data["condominio"],
                        'id_tipo' => $data["tipoHabitacao"],
                        'morada' => "aaa",
                        'portaria' => $data["portaria"]
                    ]);
                    return redirect("/habitacoes");
                } else {
                    $data["tipo"] = "prop";
                    $novoProprietario = $this->create($data);
                    DB::table('habitacoes')->insert([
                        'id_user' => $novoProprietario->id,
                        'id_condominio' => $data["condominio"],
                        'id_tipo' => $data["tipoHabitacao"],
                        'morada' => "aaa",
                        'portaria' => $data["portaria"]
                    ]);
                    return redirect("/habitacoes");
                }    
            } else {
                return redirect("/habitacoes");
            }
        }
  
        return redirect("/utilizadores");  
    } 
    
    public function novoCondominio()
    {
        if(Auth::check()){
            $user = Auth::user();
            if ($user->tipo == "adm_cond") {
                return view('admin_cond.novo_condominio');
            } else {
                return redirect("/");
            }
        }
  
        return redirect("login");  
    }

    public function confirmarNovoCondominio(Request $request)
    {
        if(Auth::check()){
            $user = Auth::user();
            if ($user->tipo == "adm_cond") {
                $request->validate([
                    'nome' => 'required',
                    'telefone' => 'required',
                    'cp' => 'required',
                    'morada' => 'required'
                ]); 
                $data = $request->all();
                
                $idCondominio = DB::table('condominios')->insertGetId([
                    'nome' => $data["nome"],
                    'telefone' => $data["telefone"],
                    'cp' => $data["cp"],
                    'id_user' => $user->id
                ]);

                Session::put('condominio', $idCondominio);
                return redirect("/");

            } else {
                return redirect("/");
            }
        }
  
        return redirect("/");  
    } 

    public function proprietarios()
    {  
        $idCondominio = Session::get('condominio');
        if ($idCondominio) {
            $condominioAtual = DB::table('condominios')
            ->where('id', $idCondominio)
            ->get()[0];
            return view("admin_cond.proprietarios", ["condominioAtual" => $condominioAtual]);
        } else {
            return redirect("/");
        }
    }
    
    public function despesas()
    {  
        $idCondominio = Session::get('condominio');
        if ($idCondominio) {
            $condominioAtual = DB::table('condominios')
            ->where('id', $idCondominio)
            ->get()[0];
            return view("admin_cond.despesas", ["condominioAtual" => $condominioAtual]);
        } else {
            return redirect("/");
        }
    }   

    public function atas()
    {  
        $idCondominio = Session::get('condominio');
        if ($idCondominio) {
            $condominioAtual = DB::table('condominios')
            ->where('id', $idCondominio)
            ->get()[0];
            return view("admin_cond.atas", ["condominioAtual" => $condominioAtual]);
        } else {
            return redirect("/");
        }
    }

    public function novaAta()
    {
        if(Auth::check()){
            $user = Auth::user();
            if ($user->tipo == "adm_cond") {
                return view('admin_cond.nova_ata');
            } else {
                return redirect("/");
            }
        }
  
        return redirect("/");  
    }

    public function confirmarNovaAta(Request $request)
    {
        if(Auth::check()){
            $user = Auth::user();
            if ($user->tipo == "adm_cond") {
                $request->validate([
                    'descricao' => 'required',
                    'ata' => 'required',
                    'data' => 'required'
                ]);
                $data = $request->all();

                DB::table('atas_reunioes')->insert([
                    'ata' => $data["ata"],
                    'descricao' => $data["descricao"],
                    'data' => $data["data"],
                    'id_condominio' => Session::get('condominio')
                ]);

                return redirect("/atas");
            } else {
                return redirect("/login");
            }
        }
  
        return redirect("/login");  
    } 
}
