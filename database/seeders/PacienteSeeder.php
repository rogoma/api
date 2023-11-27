<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
        	[
	        	'ci' => 1129111,
                'nombres' => 'Alex Oscar',
	        	'apellidos' => 'Gamarra Solis',
	        	'direccion' => 'Jr. Ramón Castilla 110',
                'edad' => 28,
	        	'sexo' => 'Masculino',	        	
	        	'tipo_sangre' => 'A+',	        	
	        	'email' => 'alex@gmail.com',
                'created_at' => date('d-m-Y H:i:s') ,
                'updated_at'=> date('d-m-Y H:i:s') ,	        	
        	],
        	[
	        	'ci' => 8021822,
                'nombres' => 'María Perla',
	        	'apellidos' => 'Saruc Main',
                'direccion' => 'Jr. Manuel Ruíz 230',
	        	'edad' => 34,
	        	'sexo' => 'Femenino',	        	
	        	'tipo_sangre' => 'A-',	        	
	        	'email' => 'maria@gmail.com',
                'created_at' => date('d-m-Y H:i:s') ,
                'updated_at'=> date('d-m-Y H:i:s') ,	        	
        	],
        	[
	        	'ci' => 2319913,
                'nombres' => 'Julio Ramón',
	        	'apellidos' => 'Quiroga Hasher',
	        	'edad' => 52,
	        	'sexo' => 'Masculino',
	        	'direccion' => 'Jr. Enrique Palacios 202',
	        	'tipo_sangre' => 'A+',	        	
	        	'email' => 'julio@gmail.com',
                'created_at' => date('d-m-Y H:i:s') ,
                'updated_at'=> date('d-m-Y H:i:s') ,	        	
        	],
        	[
        		'ci' => 8021851,
                'nombres' => 'Mario Idalgo',
				'apellidos' => 'Cuerbo Nieto',
				'edad' => 18,
				'sexo' => 'Masculino',
				'direccion' => 'Jr. Manuel Ruiz 800',
				'tipo_sangre' => 'B+',				
				'email' => 'mario@gmail.com',
                'created_at' => date('d-m-Y H:i:s') ,
                'updated_at'=> date('d-m-Y H:i:s') ,				
        	],
        	[
        		'ci' => 6221777,
                'nombres' => 'María Rosa',
        		'apellidos' => 'Jara Uri',
                'direccion' => 'Jr. Ramón Castilla 401',
				'edad' => 40,
				'sexo' => 'Femenino',				
				'tipo_sangre' => 'AB+',				
				'email' => 'maría@gmail.com',
                'created_at' => date('d-m-Y H:i:s') ,
                'updated_at'=> date('d-m-Y H:i:s') ,				
        	],
        	[
        		'ci' => 7818555,
                'nombres' => 'Kevin Juan',
				'apellidos' => 'Rodriguez Ezquivel',
				'direccion' => 'Jr. Alfonso Ugarte 2020',
                'edad' => 49,
				'sexo' => 'Masculino',				
				'tipo_sangre' => 'A+',				
				'email' => 'kevin@gmail.com',
                'created_at' => date('d-m-Y H:i:s') ,
                'updated_at'=> date('d-m-Y H:i:s') ,				
        	],
        	[
        		'ci' => 2388591,
                'nombres' => 'Cielo Celeste',
				'apellidos' => 'Lázaro Peterson',
				'direccion' => 'Jr. Francisco Bolognesi',
                'edad' => 50,
				'sexo' => 'Femenino',				
				'tipo_sangre' => 'A-',				
				'email' => 'cielo@gmail.com',
                'created_at' => date('d-m-Y H:i:s') ,
                'updated_at'=> date('d-m-Y H:i:s') ,				
        	]
        ]);
    }
}
