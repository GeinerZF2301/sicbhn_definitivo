<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Documento;
class StoreDocumentoRequest extends FormRequest
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
            'path' => 'string|max:100',
            'file' => 'required|mimes:pdf,doc,docx|max:2048',
            'tipo_documento' => 'required|string'
        ];
    }
    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del documento es obligatorio',
            'estado.required' => 'El estado es obligatorio',
            'file.required' => 'El archivo que desea cargar es obligatorio',
            'tipo_documento.required' => 'El tipo de documento es obligatorio',
        ];
    }
}
