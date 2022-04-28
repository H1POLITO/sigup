<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;

    protected $fillable = [
        "valor_pagar",
        "user_id"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function aluno(){
        return $this->belongsTo(Aluno::class);
    }
}
