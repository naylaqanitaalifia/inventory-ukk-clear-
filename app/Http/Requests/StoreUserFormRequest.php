<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return auth()->check() && auth()->user()->role === 'admin';
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
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users,email',
            ],
            'role' => [
                'required',
                'in:admin,staff',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'The :attribute is required.',
            'string' => 'The :attribute must be a string.',
            'max' =>  'The :attribute may not be greater than :max characters.',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'name',
            'division' => 'division',
        ];
    }
}
