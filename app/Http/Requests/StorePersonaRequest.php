<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Persona;
class StorePersonaRequest extends FormRequest
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
            'apellido1' => 'required|string|max:100',
            'apellido2' => 'string|max:100',
            'identificacion' => 'required|string|max:15',
            'tipo_identificacion' => 'required|string|max:50',
            'pais' => 'required|string|max:50',
            'ciudad' => 'required|string|max:75',
            'calle' => 'required|string|max:75',
            'tipo_persona' => 'required|int' 
        ];
    }
}
