<?php

namespace App\Http\Requests;
use App\Models\TipoPersona;
use Illuminate\Foundation\Http\FormRequest;

class StoreTipoPersonaRequest extends FormRequest
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
            'tipo_persona' => 'required|alpha_spaces|max:50',
            'descripcion' => 'required|alpha_spaces|max:100',
        ];
    }
    public function messages()
    {
        return [
            'tipo_persona' => 'El nombre de la campaña es obligatorio',
            'descripcion.required' => 'La descripcion es obligatoria',
            'tipo_persona.alpha_spaces' => 'El tipo de persona debe ser escrito en formato de texto',
            'descripcion.alpha_spaces' => 'La descripcion debe ser escrita en formato de texto',
        ];
    }
}
