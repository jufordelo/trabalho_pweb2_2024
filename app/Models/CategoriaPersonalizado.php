<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaPersonalizado extends Model
{
    use HasFactory;

    protected $table = "categoria_personalizado";
    //app/Models/
    protected $fillable = [
        "nome",
    ];
}
