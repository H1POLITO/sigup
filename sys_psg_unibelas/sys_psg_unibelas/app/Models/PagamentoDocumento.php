<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagamentoDocumento extends Model
{
    use HasFactory;

    protected $fillable = [
        "pagamento_id",
        "config_pagamento_id",
        "quantidade"
    ];

    public function pagamento()
    {
        return $this->belongsTo(Pagamento::class);
    }

    public function config_pagamento()
    {
        return $this->belongsTo(ConfigPagamento::class);
    }
}
