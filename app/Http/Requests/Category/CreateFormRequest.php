<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name_category' => 'required',
            'description' => 'required',

        ];
    }

    public function messages(): array
    {
        return [
            'name_category.required' => 'Tên bạn đang để trống...',
             'description.required' => 'Description bạn đang để trống...',
        ];
    }
}