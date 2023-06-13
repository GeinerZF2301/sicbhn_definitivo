<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTallerPersonaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required|string|max:100',
            'apellidos' => 'required|string|max:150',
            'tipo_identificacion' => 'required|string|max:50',
            'numero_identificacion' => 'required|integer',
            'fecha_de_nacimiento' => 'required|date|',
            'edad' => 'required |integer|min:1|max:99',
            'pais' => 'required|string|max:50',
            'ciudad' => 'required|string|max:75',
            'estado' => 'required|string|max:75',
            'tipo_persona_id' => 'required|integer' ,
            'taller_id' => 'required|integer'
        ];
    }
    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.string' => 'El nombre debe ser escrito en formato de texto.',
            'nombre.max' => 'El nombre no debe exceder los :max caracteres.',
            'apellidos.required' => 'Los apellidos son obligatorios.',
            'apellidos.string' => 'Los apellidos deben ser escrito en formato de texto.',
            'apellidos.max' => 'Los apellidos no deben exceder los :max caracteres.',
            'tipo_identificacion.required' => 'El tipo de identificación es obligatorio.',
            'tipo_identificacion.string' => 'El tipo de identificación debe ser escrito en formato de texto.',
            'tipo_identificacion.max' => 'El tipo de identificación no debe exceder los :max caracteres.',
            'pais.required' => 'El país es obligatorio.',
            'pais.string' => 'El país debe ser escrito en formato de texto.',
            'pais.max' => 'El país no debe exceder los :max caracteres.',
            'ciudad.required' => 'La ciudad es obligatoria.',
            'ciudad.string' => 'La ciudad debe ser escrito en formato de texto.',
            'ciudad.max' => 'La ciudad no debe exceder los :max caracteres.',
            'estado.required' => 'El estado es obligatorio.',
            'estado.string' => 'El estado debe ser escrito en formato de texto.',
            'estado.max' => 'El estado no debe exceder los :max caracteres.',
            'numero_identificacion.required' => 'El número de identificación es obligatorio.',
            'numero_identificacion.integer' => 'El número de identificación debe ser proporcionado en valores numéricos.',
            'fecha_de_nacimiento.required' => 'La fecha de nacimiento es obligatoria.',
            'fecha_de_nacimiento.date' => 'La fecha de nacimiento debe tener un formato válido.',
            'edad.required' => 'La edad es obligatoria.',
            'edad.integer' => 'La edad debe ser un número entero.',
            'edad.min' => 'La edad no puede ser menor a 1.',
            'edad.max' => 'La edad no puede ser mayor a 99.',
            'voluntariado_id.required' => 'El voluntariado a registrarse es obligatorio.'
        ];
    }
}
