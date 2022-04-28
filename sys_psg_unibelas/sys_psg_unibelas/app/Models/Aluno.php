<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "num_bi",
        "num_processo",
        "curso",
        "turno",
        "turma",
        "genero",
        "ano_academico",
        "user_id"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
