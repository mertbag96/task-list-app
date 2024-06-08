<?php

namespace App\Http\Requests\Auth;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class LogInRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "email" => ["required", "email", "max:48"],
            "password" => ["required", "string", "min:8", "max:24"]
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'required' => ":attribute is required.",
            'email' => "Please enter a valid email.",
            'email.max' => ":attribute must be maximum 48 characters.",
            "min" => ":attribute must be at least 8 characters.",
            "max" => ":attribute must be maximum 24 characters."
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'email' => "Email",
            'password' => "Password",
        ];
    }
}
