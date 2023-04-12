<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Campaña;
class StoreCampañaRequest extends FormRequest
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
            'tipo_campaña' => 'required |string|',
            'estado' => 'required|boolean'
        ];
    }
    public function messages()
    {
        return [
            'nombre.required' => 'El nombre de la campaña es obligatorio',
            'descripcion.required' => 'La descripcion es obligatoria',
            'ubicacion.required' => 'La ubicacion es obligatoria',
            'fecha.required' => 'La fecha de la campaña es obligatoria',
            'hora.required' => 'La hora de la campaña es obligatoria',
            'tipo_campaña.required' => 'El tipo de campaña es obligatorio',
            'estado.required' => 'El esdo de de la campaña es obligatorio',
        ];
    }
}
