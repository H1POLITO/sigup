<?php

namespace App\Lib\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ConfigPagamentoPropina;

class ConfigPagamentoPropinaRepository
{

    public function createConfigPagamentoPropina(Request $request)
    {
        $config = ConfigPagamentoPropina::create([
            "preco"   => $request->preco,
            "curso_id" => $request->curso_id
        ]);

        return $config;
    }

    public function getAll()
    {
        $results = DB::select("SELECT cpp.id, cpp.preco, c.descricao FROM
        config_pagamento_propinas cpp
        INNER JOIN cursos c ON c.id = cpp.curso_id");

        return $results;
    }

    public function getConfigByCurso($id_aluno)
    {
        $ob = new AlunoRepository();
        $aluno = $ob->getAlunoById($id_aluno);
        $results = DB::select("SELECT cpp.id, cpp.preco, c.descricao FROM
        config_pagamento_propinas cpp
        INNER JOIN cursos c ON c.id = cpp.curso_id
        WHERE c.descricao = '{$aluno[0]->curso}'");

        return $results;
    }

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
