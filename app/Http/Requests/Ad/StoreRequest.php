<?php

namespace App\Http\Requests\Ad;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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

    public function messages(): array
    {
        return [
            'subject.required' => 'Поле название должно быть заполнено.',
            'subject.string' => 'Поле название должно быть строкой.',
            'subject.max' => 'Поле название не должно превышать 100 символов.',

            'description.required' => 'Поле описание должно быть заполнено.',
            'description.string' => 'Поле описание должно быть строкой.',
            'description.max' => 'Поле описание не должно превышать 100 символов.',

            'address.required' => 'Поле адресс должно быть заполнено.',
            'address.string' => 'Поле адресс должно быть строкой.',
            'address.max' => 'Поле адресс не должно превышать 100 символов.',

            'contact.required' => 'Поле номер телефона должно быть заполнено.',
            'contact.integer' => 'Поле номер телефона должно быть числом и не превышать 12 символов.',
            'contact.min' => 'Поле номер телефона должно превышать 0 символов.',
            'contact.max' => 'Поле номер телефона не должно превышать 12 символов.',

            'price.required' => 'Поле цена должно быть заполнено.',
            'price.integer' => 'Поле цена должно быть числом и не превышать 12 символов.',
            'price.min' => 'Поле цена должно превышать 0 символов.',
            'price.max' => 'Поле цена не должно превышать 12 символов.',

            'number_of_rooms.required' => 'Поле количество комнат должно быть заполнено.',
            'number_of_rooms.integer' => 'Поле количество комнат должно быть числом и не превышать 12 символов.',
            'number_of_rooms.min' => 'Поле количество комнат должно превышать 0 символов.',
            'number_of_rooms.max' => 'Поле количество комнат не должно превышать 12 символов.',

            'area.required' => 'Поле площадь должно быть заполнено.',
            'area.integer' => 'Поле площадь должно быть числом и не превышать 12 символов.',
            'area.min' => 'Поле площадь должно превышать 0 символов.',
            'area.max' => 'Поле площадь не должно превышать 12 символов.',
        ];
    }
}
