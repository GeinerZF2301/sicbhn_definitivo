<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateImagenRequest extends FormRequest
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
            'descripcion' => 'string|max:100',
            'estado' => 'required|boolean',
            'path' => 'required|string|max:100',
            'file' => 'nullable|mimes:png, jpg, jpeg|max:5048',
            'categoria_imagen' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es obligatorio',
            'estado.required' => 'El estado es obligatorio',
            'path.required' => 'La ruta es obligatoria',
            'file.mimes' => 'Los archivos permitidos son png, jpg, jpeg',
            'file.max' => 'La imagen que desea cargar excede el limite de 5 megabytes',
            'categoria_imagen.required' => 'La categoria de la imagen es obligatoria',
        ];
    }
}
