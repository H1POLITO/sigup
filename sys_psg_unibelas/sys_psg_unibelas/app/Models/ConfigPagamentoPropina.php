<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigPagamentoPropina extends Model
{
    use HasFactory;

    protected $fillable = [
        "preco",
        "curso_id"
    ];
    
    public function curso(){
        return $this->belongsTo(Curso::class);
    }

}
