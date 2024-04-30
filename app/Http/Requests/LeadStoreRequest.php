<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeadStoreRequest extends FormRequest
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
            'name' => 'required',
            'phone' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'É obrigatório informar um nome válido',
            'phone.required' => 'É obrigatório informar um telefone válido',
        ];
    }
}
