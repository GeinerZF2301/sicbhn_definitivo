<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticuloRequest extends FormRequest
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
            'nombre' => 'required|string|max:50',
            'descripcion' => 'required|string|max:100',
            'tipo_articulo' => 'required|string|max:100'
        ];
    }
    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del articulo es obligatorio',
            'descripcion.required' => 'La descripcion es obligatoria',
            'tipo_articulo.required' => 'El tipo de articulo es obligatorio',
        ];
    }
}
