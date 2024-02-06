<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CadastroClientRequest extends FormRequest
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
            'cpf'           => ['required'],
            'nome'           => ['required'],
            'telefone'          => ['required'],
            'data_nascimento'  => ['required'],
            'email'    => ['required'],
            'genero'             => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'cpf.required'           => 'cpf é um campo requerido',
            'nome.required'           => 'nome é um campo requerido',
            'telefone.required'          => 'telefone é um campo requerido',
            'data_nascimento.required'  => 'data_nascimento é um campo requerido',
            'email.required'    => 'email é um campo requerido',
            'genero.required'             => 'genero é um campo requerido',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()],422));
    }
}
