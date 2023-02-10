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
            'tipo_persona' => 'required|string|max:50',
            'descripcion' => 'required|string|max:100',
        ];
    }
}
