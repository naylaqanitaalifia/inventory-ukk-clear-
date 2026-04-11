<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemFormRequest extends FormRequest
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
            'category_id' => [
                'required',
                'integer',
                'exists:categories,id',
            ],
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'total' => [
                'required',
                'integer',
                'min:0',
            ],
            'repair' => [
                'nullable',
                'integer',
                'min:0',
            ],
            'lending' => [
                'nullable',
                'integer',
                'min:0',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'The :attribute is required.',
            'string' => 'The :attribute must be a string.',
            'integer' => 'The :attribute must be an integer.',
            'min' => 'The :attribute must be at least :min characters.',
            'max' =>  'The :attribute may not be greater than :max characters.',
            'exists' => 'The selected :attribute is invalid.',
        ];
    }

    public function attributes(): array
    {
        return [
            'category_id' => 'category',
            'name' => 'name',
            'total' => 'total',
            'repair' => 'repair',
            'lending' => 'lending',
        ];
    }
}
