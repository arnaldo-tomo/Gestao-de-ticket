<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class request extends FormRequest
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
            'password' => 'required',
            'password1' => 'required |same:password'
        ];
    }


    public function messages()
    {
        return [
            'password.required' => 'O E-mail e de caracter Obrigatotio',
            'password1.required' => 'Preencha o campo com a sua senha,com minino min: carecateres',
        ];
    }
}