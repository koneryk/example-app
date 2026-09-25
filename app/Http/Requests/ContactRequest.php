<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

                'name' => 'required|max:255|min:5',
                'email' => ['required','email','max:100','min:5'],
                'subject' => 'required|max:255|min:5',
                'message' => 'required|max:2550|min:5',

        ];
    }
    public function messages(): array {
        return [
            'name.required' => 'Пожалуйста введите имя',
            'email.required' => 'Пожалуйста введите email',
            'subject.required' => 'Пожалуйста введите тему',
            'message.required' => 'Пожалуйста введмте сообщение',
            'name.min' => 'Имя должно быть не менее 5 символов',
            'email.min' => 'Email должен быть не менее 5 символов',
            'email.max' => 'Email должен быть не более 255',
            'email.email' => 'Ваш еmail не похож на почту',
            'subject.min' => 'Тема сообщения должна быть не менее 5 символов',
            'subject.max' => 'Тема сообщения должна быть не более 255 символов',
            'message.min' => 'Сообщение должно быть не менее 5 символов',
            'message.max' => 'Сообщение должно быть не более 2550 символов'

        ];
    }
}
