<?php

namespace App\Lib\Repositories;

use App\Models\Store;
use Illuminate\Http\Request;
use App\Lib\Traits\EnterpriseTrait;
use App\Lib\Traits\StoreTrait;
use App\Lib\Traits\UserTrait;
use Illuminate\Support\Facades\DB;
use App\Models\Curso;

class CursoRepository
{

    #retorna todas lojas da empresa actual
    public function getAllCursos()
    {
       $cursos = Curso::all();
        return $cursos;
    }


    // #pega loja pelo Id
    // public function getCategoryById($id)
    // {
    //     $category = Category::findOrFail($id);
    //     return $category;
    // }



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
