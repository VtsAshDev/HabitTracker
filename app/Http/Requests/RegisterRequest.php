<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|max:255|string',
            'email' => 'required|email|unique:users',
            'password' =>'required|min:6|max:70|confirmed'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo é obrigatório.',
            'name.max' => 'O nome deve conter no máximo 255 caracteres.',
            'name.string' => 'O campo deve conter somente letras.',

            'email.email' => 'O campo e-mail deve ser um endereço de e-mail válido.',
            'email.required' => 'Ocampo e-mail é obrigatório.',
            'email.unique' => 'O e-mail já está em uso.',

            'password.required' => 'O campo senha é obrigatório.',
            'password.min' => 'A senha deve conter no mínimo 6 caracteres.',
            'password.max' => 'A senha deve conter no máximo 70 caracteres.',
            'password.confirmed' => 'As senhas não coincidem.'
        ];
    }

}
