<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDonacionMonetariaRequest extends FormRequest
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
            'fecha_donacion' => 'required|date',
            'fecha_recibido' => 'required|date',
            'descripcion' => 'required|string',
            'monto' => 'required',
            'persona_donante_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'fecha_donacion.required' => 'La fecha es obligatoria',
            'fecha_recibido.required' => 'La fecha de recibido es obligatoria',
            'descripcion.required' => 'La descripcion es obligatoria',
            'monto.required' => 'El monto es obligatorio',
            'persona_donante_id.required' => 'La persona donante es obligatoria',
        ];
    }
}
