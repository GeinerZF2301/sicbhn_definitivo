<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Galeria;
class StoreImagenRequest extends FormRequest
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
            'descripcion' => 'required|string|max:200',
            'estado' => 'required|boolean',
            'path' => 'string|max:100',
            'file' => 'required|mimes:png,jpg,jpeg|max:5048',
            'categoria_imagen' => 'required|string'
        ];
    }
    public function messages()
{
    return [
        'nombre.required' => 'El campo nombre es obligatorio.',
        'nombre.string' => 'El campo nombre debe ser un texto.',
        'nombre.max' => 'El campo nombre no debe exceder los 50 caracteres.',
        
        'descripcion.required' => 'El campo descripción es obligatorio.',
        'descripcion.string' => 'El campo descripción debe ser un texto.',
        'descripcion.max' => 'El campo descripción no debe exceder los 200 caracteres.',
        
        'estado.required' => 'El campo estado es obligatorio.',
        'estado.boolean' => 'El campo estado debe ser verdadero o falso.',
        
        'path.string' => 'El campo path debe ser un texto.',
        'path.max' => 'El campo path no debe exceder los 100 caracteres.',
        
        'file.required' => 'Debe seleccionar un archivo.',
        'file.mimes' => 'El archivo debe tener un formato válido (png, jpg, jpeg).',
        'file.max' => 'El tamaño del archivo no debe exceder los 5 MB.',
        
        'categoria_imagen.required' => 'Debe seleccionar una categoría de imagen.',
        'categoria_imagen.string' => 'El campo categoría de imagen debe ser un texto.'
    ];
}

}
