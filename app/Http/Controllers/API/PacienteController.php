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
        //PARA MOSTRAR EN VISTA (INDEX.HTML)
        $pacientes = Paciente::all();
        return $pacientes;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //PARA UTILIZAR DESDE VISTA (INDEX.HTML)
        $paciente = new Paciente();
        $paciente->ci = $request->ci;
        $paciente->nombres = $request->nombres;
        $paciente->apellidos = $request->apellidos;

        $paciente->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //PARA UTILIZAR DESDE VISTA (INDEX.HTML)
        $paciente = Paciente::findOrFail($request->id);
        $paciente->ci = $request->ci;
        $paciente->nombres = $request->nombres;
        $paciente->apellidos = $request->apellidos;

        $paciente->save();

        return $paciente;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //PARA UTILIZAR DESDE VISTA (INDEX.HTML)
        $paciente = Paciente::destroy($request->id);
        return $paciente;
    }
}
