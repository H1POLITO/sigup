<?php

namespace App\Lib\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ConfigPagamento;

class ConfigPagamentoRepository
{

    public function createConfigPagamento(Request $request)
    {
        $config = ConfigPagamento::create([
            "preco"   => $request->preco,
            "descricao" => $request->descricao
        ]);

        return $config;
    }

    public function getConfigPagamentoById($id){
        $config = ConfigPagamento::findOrfail($id);
        return $config;
    }

    public function getAll()
    {
        $results = ConfigPagamento::all();
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
