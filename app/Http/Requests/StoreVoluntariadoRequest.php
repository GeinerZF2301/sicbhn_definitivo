<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVoluntariadoRequest extends FormRequest
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
            'descripcion' => 'required|string|max:150',
            'ubicacion' => 'required|string|max:100',
            'fecha' => 'required|date|',
            'hora' => 'required',
            'tipo_voluntariado' => 'required |string|',
            'estado' => 'required|boolean'
        ];
    }
    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del voluntariado es obligatorio',
            'descripcion.required' => 'La descripcion es obligatoria',
            'ubicacion.required' => 'La ubicacion es obligatoria',
            'fecha.required' => 'La fecha del voluntariado es obligatoria',
            'hora.required' => 'La hora del voluntariado es obligatoria',
            'tipo_voluntariado.required' => 'El tipo de voluntariado es obligatorio',
            'estado.required' => 'El estado del voluntariado es obligatorio',
        ];
    }
}
