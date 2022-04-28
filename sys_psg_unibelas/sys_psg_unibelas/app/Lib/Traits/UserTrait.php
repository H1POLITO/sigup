<?php

namespace App\Lib\Traits;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

trait UserTrait
{
    protected function getNextUserId()
    {
        $nextId = User::all()->max('id') + 1;
        return $nextId;
    }

    protected function generatePassword(){
        
        $ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ";
        $mi = "abcdefghijklmnopqrstuvyxwz";
        $nu = "0123456789";
        $si = "!@#$%¨&*()_+=";
        $senha = '';

        // $ma é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($ma);

        // $mi é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($mi);

        // $nu é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($nu);

        // $si é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($si);

        // retorna a senha embaralhada com "str_shuffle" com o tamanho de 6 caracteres
        return substr(str_shuffle($senha), 0, 6);
    }
    
}