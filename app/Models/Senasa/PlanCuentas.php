<?php

namespace App\Models\Senasa;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class PlanCuentas extends Model
{
     //UTILIZA CONEXIÓN A BD MYSQL (LOCALHOST)
     //BD DEBE TENER TABLA USERS
     protected $connection = 'mysql';

    protected $table = 'plan_cuenta';

    protected $fillable = [
        'nro_cuenta',
        'nom_cuenta',
        'id_moneda',
    ];

}
