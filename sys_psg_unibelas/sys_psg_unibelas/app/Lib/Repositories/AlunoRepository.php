<?php

namespace App\Lib\Repositories;

use App\Models\Store;
use Illuminate\Http\Request;
use App\Lib\Traits\EnterpriseTrait;
use App\Lib\Traits\StoreTrait;
use App\Lib\Traits\UserTrait;
use App\Models\Aluno;
use Illuminate\Support\Facades\DB;
use App\Models\Curso;

class AlunoRepository
{

    #retorna todas lojas da empresa actual
    public function getAllAlunos()
    {
        $alunos = Aluno::all();
        return $alunos;
    }


    // #pega loja pelo Id
    public function getAlunoById($id)
    {
        $aluno = DB::select("SELECT a.id, u.nome_completo, u.email, a.num_bi, a.num_processo, a.curso, a.ano_academico, a.turno, a.turma FROM
        users u
        INNER JOIN alunos a ON a.user_id = u.id
        WHERE a.user_id = {$id}");
        return $aluno;
    }

    public function getUltimoMesPago($id)
    {
        $pagamento = DB::select("SELECT max(id) as id FROM pagamentos WHERE user_id = {$id}");
     
        if($pagamento[0]->id != null || $pagamento[0]->id != 0){
            $ultimo_mes = DB::select("SELECT mes_id from pagamento_propinas WHERE pagamento_id = {$pagamento[0]->id}");
            if ($ultimo_mes != null)
                return $ultimo_mes[0]->mes_id;
            else
                return 1;
        }
        else
        return 1;
       
    }


    // #insere uam nova loja
    // public function createCategory(Request $request)
    // {
    //     $category = Category::create([
    //         "description"   => $request->description,
    //         "store_id" => $this->getCurrentStoreId()
    //     ]);

    //     return $category;
    // }

    #actualiza loja
    // public function updateCategory(Request $request, int $id)
    // {
    //     $category = Category::findOrFail($id);

    //     return $category->update(
    //         $request->only([
    //             "description"
    //         ])
    //     );
    // }
}
