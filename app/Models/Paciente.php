<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    //UTILIZA CONEXIÓN A BD POSTGRESQL (LOCALHOST)
    protected $connection = 'pgsql';

    protected $fillable = [
        'ci',
        'nombres',
		'apellidos',
		'direccion' ,
        'edad',
		'sexo',
		'tipo_sangre',
		'email'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

}
