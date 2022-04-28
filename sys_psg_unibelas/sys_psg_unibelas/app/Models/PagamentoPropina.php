<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagamentoPropina extends Model
{
    use HasFactory;

    protected $fillable = [
        "pagamento_id",
        "config_propina_id",
        "mes_id",
        "meses_pago"
    ];
}
