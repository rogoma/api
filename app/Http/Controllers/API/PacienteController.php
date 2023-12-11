<?php

namespace App\Http\Controllers\API;

use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PacienteResource;
use App\Http\Requests\GuardarPacienteRequest;
use App\Http\Requests\ActualizarPacienteRequest;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Paciente::all();
        //con Resources
        return PacienteResource::collection(Paciente::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarPacienteRequest $request)
    {
        // Paciente::create($request->all());
        // return response()->json([
        //     'res' => true,
        //     'mensaje' => 'Paciente Guardado Correctamente'
        // ],200);

        //con Resources y mensajes
        return (new PacienteResource(Paciente::create($request->all())))
                    ->additional(['msg' => 'Paciente Guardado Correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        // return response()->json([
        //     'res' => true,
        //     'mensaje' => 'Paciente Actualizado Correctamente'
        // ],200);

        //con Resources y mensajes
        return (new PacienteResource($paciente))
                    ->additional(['msg' => 'Paciente Actualizado Correctamente']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarPacienteRequest $request, Paciente $paciente)
    {
        // $paciente->update($request->all());
        // return response()->json([
        //     'res' => true,
        //     'mensaje' => 'Paciente Actualizado Correctamente',
        //     //muestra datos del paciente
        //     'paciente' => $paciente
        // ],200);

         //con Resources y mensajes y StatusCode
         $paciente->update($request->all());
         return (new PacienteResource($paciente))
                    ->additional(['msg' => 'Paciente Actualizado Correctamente'])
                    ->response()
                    ->setStatusCode(202);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        // $paciente->delete();
        // return response()->json([
        //     'res' => true,
        //     'mensaje' => 'Paciente Eliminado Correctamente',
        // ],200);

        //con Resources
        $paciente->delete();
        return (new PacienteResource($paciente))
                    ->additional(['msg' => 'Paciente Eliminado Correctamente']);
    }    
}
