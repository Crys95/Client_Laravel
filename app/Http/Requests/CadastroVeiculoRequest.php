<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CadastroVeiculoRequest extends FormRequest
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

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()],422));
    }
}
