<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    protected $table = 'tutores';

    protected $fillable = [
        'empresa',
        'nif',
        'documento',
        'nombre',
        'apellido1',
        'apellido2',
        'documento_pais',
        'provincia',
        'municipio',
        'status',
        'telefono',
        'email',
    ];
}