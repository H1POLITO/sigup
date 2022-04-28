<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Lib\Repositories\AlunoRepository;
use App\Lib\Repositories\ConfigPagamentoPropinaRepository;
use App\Lib\Repositories\ConfigPagamentoRepository;
use App\Lib\Repositories\MesRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AlunoSistemaController extends Controller
{
    public function index(){
        return view('aluno-sistema.index');
    }

    public function getListPagamentos(){
        $ob = new ConfigPagamentoRepository();
        $results = $ob->getAll();
        return view('aluno-sistema.pagamentos.index', compact('results'));
    }

    public function getFormPagamento($id){
        $ob = new ConfigPagamentoRepository();
        $results = $ob->getConfigPagamentoById($id);
        $ob = new AlunoRepository();
        $aluno = $ob->getAlunoById(Auth::user()->id);
        return view('aluno-sistema.pagamentos.pagar', compact(["results", "aluno"]));
    }

    public function getFormPagamentoPropina(){

        $ob = new MesRepository();
        $meses = $ob->getAllMeses();

        $ob = new AlunoRepository();
        $aluno = $ob->getAlunoById(Auth::user()->id);
        $ultimo_mes = $ob->getUltimoMesPago(Auth::user()->id);
   
        $ob = new ConfigPagamentoPropinaRepository();
        $results = $ob->getConfigByCurso(Auth::user()->id); 
     
        return view('aluno-sistema.pagamentos.pagar-propinas', compact(["meses", "aluno", "results", "ultimo_mes"]));
        // return view('aluno-sistema.pagamentos.pagar-propinas');
    }

    public function getPerfil(){
        $ob = new AlunoRepository();
        $aluno = $ob->getAlunoById(Auth::user()->id);
        return view('aluno-sistema.perfil', compact(["aluno"]));
    }
}
