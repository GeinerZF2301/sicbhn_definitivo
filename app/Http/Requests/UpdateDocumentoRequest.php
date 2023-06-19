<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Documento;
class UpdateDocumentoRequest extends FormRequest
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
            'nombre' => 'required|alpha_spaces|max:50',
            'descripcion' => 'required|alpha_spaces|max:100',
            'estado' => 'required|boolean',
            'path' => 'alpha_spaces|max:100',
            'file' => 'nullable|mimes:pdf,doc,docx|max:2048',
            'tipo_documento' => 'required|alpha_spaces|max:50'
        ];
    }
    
    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.alpha_spaces' => 'El nombre solo debe contener letras y espacios.',
            'nombre.max' => 'El nombre no debe exceder los 50 caracteres.',
            'descripcion.required' => 'La descripcion es obligatoria.',
            'descripcion.alpha_spaces' => 'La descripción solo debe contener letras y espacios.',
            'descripcion.max' => 'La descripción no debe exceder los 100 caracteres.',
            'estado.required' => 'El estado es obligatorio.',
            'estado.boolean' => 'El estado es obligatorio.',
            'path.alpha_spaces' => 'La ruta solo debe contener letras y espacios.',
            'path.max' => 'La ruta no debe exceder los 100 caracteres.',
            'file.mimes' => 'El archivo debe ser un PDF, DOC o DOCX.',
            'file.max' => 'El archivo no debe exceder los 2048 KB.',
            'tipo_documento.required' => 'El tipo de documento es obligatorio.',
            'tipo_documento.alpha_spaces' => 'El tipo de documento solo debe contener letras y espacios.'
        ];
    }
}
