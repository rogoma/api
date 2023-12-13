<?php

use App\Http\Controllers\API\PacienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Rutas sin Resources
// Route::get('pacientes',[PacienteController::class,'index']);
// Route::post('pacientes',[PacienteController::class,'store']);
// Route::get('/pacientes/{paciente}', [PacienteController::class,'show']);
// Route::put('/pacientes/{paciente}', [PacienteController::class,'update']);
// Route::delete('/pacientes/{paciente}', [PacienteController::class,'destroy']);

//Ruta con Resources
Route::apiResource('pacientes', PacienteController::class);


// Route::get('/articulos', function () {
//     return view('index');
// });

// Route::get('/pacientes', 'App\Http\Controllers\API\PacienteController@index');