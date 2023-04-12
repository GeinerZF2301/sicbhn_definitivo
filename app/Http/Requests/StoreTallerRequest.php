<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTallerRequest extends FormRequest
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
            'tipo_taller' => 'required|string|',
            'cupo' => 'required |int|min:0',
            'estado' => 'required|boolean'
        ];
    }
    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del taller es obligatorio',
            'descripcion.required' => 'La descripcion es obligatoria',
            'ubicacion.required' => 'La ubicacion es obligatoria',
            'fecha.required' => 'La fecha del taller es obligatoria',
            'hora.required' => 'La hora del taller es obligatoria',
            'tipo_taller.required' => 'El tipo de taller es obligatorio',
            'cupo.required' => 'El cupo es obligatorio',
            'estado.required' => 'El esdo de del taller es obligatorio',
        ];
    }
}
