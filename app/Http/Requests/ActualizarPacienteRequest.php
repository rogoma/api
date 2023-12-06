<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarPacienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // "ci" => "required|unique:pacientes,ci",
            "nombres" => "required",
            "apellidos" => "required",
            "direccion" => "required",
            "edad" => "required",
            "sexo" => "required",
            "tipo_sangre" => "required",
            "email" => "required|email"
        ];
    }
}
