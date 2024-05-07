<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CarrosResquest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'modelo'=>'required|max:150',
            'ano'=>'required|max:10',
            'marca'=>'required|max:150',
            'cor'=>'required|max:150',
            'peso'=>'required|max:150',
            'potencia'=>'required|max:150',
            'descricao'=>'required|max:1050',
            'preco'=>'required|decimal:2',
        ];
    }
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => $validator->errors()
        ]));
    }
    public function messages()
    {
        return [
            'modelo.required' => 'O campo modelo é obrigatório!',
            'nome.max' => 'O campo modelo deve conter no max 150 caracteres',

            'ano.required' => 'O campo ano é obrigatório!',
            'ano.max' => 'O campo ano deve conter no max 10 caracteres',

            'marca.required' => 'O campo marca é obrigatório!',
            'marca.max' => 'O campo marca deve conter no max 150 caracteres',

            'cor.required' => 'O campo cor é obrigatório!',
            'cor.max' => 'O campo cor deve conter no max 150 caracteres',

            'peso.required' => 'O campo peso é obrigatório!',
            'peso.max' => 'O campo peso deve conter no max 150 caracteres',

            'potencia.required' => 'O campo potencia é obrigatório!',
            'potencia.max' => 'O campo potencia deve conter no max 150 caracteres',

            'descricao.required' => 'O campo descrição é obrigatório!',
            'descricao.max' => 'O campo descrição deve conter no max 150 caracteres',

            'preco.required' => 'O campo preço é obrigatório!'
     ];
}
}
