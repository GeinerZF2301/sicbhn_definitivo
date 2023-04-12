<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\CuentaBancaria;
class StoreCuentaBancariaRequest extends FormRequest
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
            'entidad_bancaria' => 'required',
            'numero_cuenta' => 'required',
            'estado' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'entidad_bancaria.required' => 'La entidad bancaria es obligatoria',
            'numero_cuenta.required' => 'El número de cuenta es es obligatoria',
            'estado.required' => 'El estado es obligatorio',
        ];
    }
}
