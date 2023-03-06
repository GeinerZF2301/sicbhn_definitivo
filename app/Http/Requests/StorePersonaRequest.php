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
            'nombre' => 'required|string|max:100',
            'apellidos' => 'required|string|max:150',
            'tipo_identificacion' => 'required|string|max:50',
            'numero_identificacion' => 'required|string|max:15',
            'fecha_de_nacimiento' => 'required|date|',
            'edad' => 'required |integer|min:1|max:99',
            'pais' => 'required|string|max:50',
            'ciudad' => 'required|string|max:75',
            'calle' => 'required|string|max:75',
            'estado' => 'required|string|max:75',
            'tipo_persona_id' => 'required|int' 
        ];
    }
    public function messages()
    {
        return [
            'nombre.required' => 'El nombre de la persona es obligatorio',
            'apellidos.required' => 'Los apellidos de la persona son obligatorios',
            'tipo_identificacion.required' => 'El tipo de identificacion es obligatorio',
            'numero_identificacion.required' => 'El numero de identificacion es obligatorio',
            'fecha_de_nacimiento.required' => 'La fecha de nacimiento es obligatoria',
            'pais.required' => 'El pais es obligatorio',
            'ciudad.required' => 'La ciudad es obligatoria',
            'calle.required' => 'La calle es obligatoria',
            'tipo_persona_id.required' => 'El tipo de persona es obligatorio',
            'estado.required' => 'El estado de la persona es obligatorio',
            'edad.min' => 'La edad no puede ser menor a 1',
            'edad.max' => 'La edad no puede ser mayor a 99',
        ];
    }
}
