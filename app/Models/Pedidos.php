<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'fecha',
        'producto_id',
        'cliente_id',
        'fecha_entrega'
    ];


}
