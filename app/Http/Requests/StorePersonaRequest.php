<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Persona;

class StorePersonaRequest extends FormRequest
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
            'nombre' => 'required|alpha_spaces|max:100',
            'apellidos' => 'required|alpha_spaces|max:150',
            'tipo_identificacion' => 'required|alpha_spaces|max:50',
            'numero_identificacion' => 'required|integer',
            'fecha_de_nacimiento' => 'required|date|',
            'edad' => 'required |integer|min:1|max:99',
            'pais' => 'required|alpha_spaces|max:50',
            'ciudad' => 'required|alpha_spaces|max:75',
            'calle' => 'required|alpha_spaces|max:75',
            'estado' => 'required|alpha_spaces|max:75',
            'tipo_persona_id' => 'required|int' 
        ];
    }
    public function messages()
    {
        return [
            'nombre.required' => 'El nombre de la persona es obligatorio.',
            'nombre.max' => 'El nombre no puede exceder los 100 caracteres.',
            'apellidos.required' => 'Los apellidos de la persona son obligatorios.',
            'apellidos.max' => 'Los apellidos no pueden exceder los 150 caracteres.',
            'tipo_identificacion.required' => 'El tipo de identificación es obligatorio.',
            'tipo_identificacion.max' => 'El tipo de identificación no puede exceder los 50 caracteres.',
            'numero_identificacion.required' => 'El número de identificación es obligatorio.',
            'numero_identificacion.integer' => 'El número de identificación debe ser un valor entero.',
            'fecha_de_nacimiento.required' => 'La fecha de nacimiento es obligatoria.',
            'fecha_de_nacimiento.date' => 'La fecha de nacimiento debe tener un formato válido.',
            'edad.required' => 'La edad es obligatoria.',
            'edad.integer' => 'La edad debe ser un valor entero.',
            'edad.min' => 'La edad no puede ser menor a 1.',
            'edad.max' => 'La edad no puede ser mayor a 99.',
            'pais.required' => 'El país es obligatorio.',
            'pais.max' => 'El país no puede exceder los 50 caracteres.',
            'ciudad.required' => 'La ciudad es obligatoria.',
            'ciudad.max' => 'La ciudad no puede exceder los 75 caracteres.',
            'calle.required' => 'La calle es obligatoria.',
            'calle.max' => 'La calle no puede exceder los 75 caracteres.',
            'estado.required' => 'El estado es obligatorio.',
            'estado.max' => 'El estado no puede exceder los 75 caracteres.',
            'tipo_persona_id.required' => 'El tipo de persona es obligatorio.',
            'tipo_persona_id.integer' => 'El tipo de persona debe ser un valor entero.'
        ];
    }
}
