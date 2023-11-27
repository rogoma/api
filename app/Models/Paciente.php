<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

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
