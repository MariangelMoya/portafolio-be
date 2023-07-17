<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<string, ValidationRule|string>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'between:1,60'],
//            'name' => 'required|string|between:1,60', es lo equivalente a lo de arriba
            'email' => ['required','email','between:1,100'],
            'subject' => ['required', 'string', 'between:1,100'],
            'message' => ['required', 'string', 'between:1,500']
        ];
    }
}
