<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CadastroVeiculoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'placa'           => ['required'],
            'marca'           => ['required'],
            'modelo'          => ['required'],
            'ano_fabricacao'  => ['required'],
            'numero_eixos'    => ['required'],
            'cor'             => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'placa.required'           => 'placa é um campo requerido',
            'marca.required'           => 'marca é um campo requerido',
            'modelo.required'          => 'modelo é um campo requerido',
            'ano_fabricacao.required'  => 'ano_fabricacao é um campo requerido',
            'numero_eixos.required'    => 'numero_eixos é um campo requerido',
            'cor.required'             => 'cor é um campo requerido',
        ];
    }
}
