<?php

namespace App\Http\Controllers;

use Session;
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

    public function minhas_habitacoes()
    {
     return DB::table('habitacoes')
            ->join('users', 'users.id', '=', 'habitacoes.id_user')
            ->join('tipo_habitacao', 'tipo_habitacao.id', '=', 'habitacoes.id_tipo')
            ->where('habitacoes.id_condominio', Session::get('condominio'))
            ->select('habitacoes.id', 'habitacoes.portaria', 'habitacoes.id_user', 'users.nome', 'tipo_habitacao.tipo')
            ->get();
    }

    public function proprietario($cc)
    {
     return DB::table('users')
            ->where('cc', $cc)
            ->get();
    }

    public function meus_proprietarios()
    {
     return DB::table('habitacoes')
            ->join('users', 'users.id', '=', 'habitacoes.id_user')
            ->where('habitacoes.id_condominio', Session::get('condominio'))
            ->groupByRaw('habitacoes.id_user')
            ->selectRaw('users.id, users.nome, COUNT(*) AS habitacoes')
            ->get();
    }

    public function novaHabitacao(Request $request)
    {
      return DB::table('tipo_habitacao')->insertGetId([
          'tipo' => $request["novaHabitacao"]
      ]);
    }  

    public function minhas_despesas($estado)
    {
      if ($estado == "pago") {
        return DB::table('despesas')
            ->where('id_condominio', Session::get('condominio'))
            ->where('pago', 1)
            ->get();
      } else if ($estado == "por_pagar") {
        return DB::table('despesas')
            ->where('id_condominio', Session::get('condominio'))
            ->where('pago', 0)
            ->get();
      } else if ($estado == "todos") {
        return DB::table('despesas')
            ->where('id_condominio', Session::get('condominio'))
            ->get();
      }

      return false;
    }

    public function atualizarEstado(Request $request)
    {
      return DB::table('despesas')
                ->where('id', $request["id"])
                ->update(['pago' => $request["pago"]]);
    }  

    public function apagarDespesa(Request $request)
    {
      return DB::table('despesas')
                ->where('id', $request["id"])
                ->delete();
    }  

    public function minhas_atas()
    {
     return DB::table('atas_reunioes')
            ->where('id_condominio', Session::get('condominio'))
            ->get();
    }

    public function ata($id)
    {
     return DB::table('atas_reunioes')
            ->where('id', $id)
            ->get();
    }
}
