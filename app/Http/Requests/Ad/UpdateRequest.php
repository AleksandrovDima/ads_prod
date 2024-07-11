<?php

namespace App\Http\Requests\Ad;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'subject' => 'required|string|max:100',
            'description' => 'required|string|max:3000',
            'address' => 'required|string|max:100',
            'contact' => 'required|string|min:0|max:12',
            'price' => 'required|string|min:0|max:12',
            'number_of_rooms' => 'required|integer|min:0|max:100',
            'area' => 'required|integer|min:0|max:100000',
            'category_id' => '',
            'type_id' => '',
            'user_id' => '',
        ];
    }
}
