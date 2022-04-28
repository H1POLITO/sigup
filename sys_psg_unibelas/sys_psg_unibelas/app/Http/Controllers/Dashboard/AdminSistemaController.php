<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lib\Repositories\CursoRepository;
use App\Lib\Repositories\ConfigPagamentoPropinaRepository;
use App\Lib\Repositories\ConfigPagamentoRepository;
use App\Lib\Repositories\PagamentoDocumentoRepository;
use App\Lib\Repositories\PagamentoPropinaRepository;
use Illuminate\Support\Facades\Auth;

class AdminSistemaController extends Controller
{
    public function index(){
        return view('admin-sistema.index-interactive');
    }
    public function indexDashboard(){
        return view('admin-sistema.index');
    }
    public function getPerfilAdmin(){
        return view('admin-sistema.perfil');
    }
    public function getPropinas(){
        return view('admin-sistema.pagamentos.propina');
    }
    public function getPagamentoPropinas(){
        $ob = new CursoRepository();
        $cursos = $ob->getAllCursos();
        $ob = new ConfigPagamentoPropinaRepository();
        $results = $ob->getAll();
        return view('admin-sistema.pagamentos.propina', compact(['cursos', 'results']));
    }

    public function getPagamentoDocumentos(){
        $ob = new ConfigPagamentoRepository();
        $results = $ob->getAll();
        return view('admin-sistema.pagamentos.documento', compact('results'));
    }


    public function getListaDocumentos(){
        $ob = new PagamentoDocumentoRepository();
        $results = $ob->getAllPagamentos();
        return view('admin-sistema.pagamentos.ver-documentos', compact('results'));
    }

    public function getListaPagamentosPropinas(){
        $ob = new PagamentoPropinaRepository();
        $results = $ob->getAllPagamentos();
        return view('admin-sistema.pagamentos.ver-propinas', compact('results'));
    }
  
}
