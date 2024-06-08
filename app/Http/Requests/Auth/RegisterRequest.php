<?php

namespace App\Http\Requests\Auth;

use Illuminate\Contracts\Validation\ValidationRule;
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "first_name" => ["required", "string", "max:24"],
            "last_name" => ["required", "string", "max:24"],
            "email" => ["required", "email", "unique:users", "max:48"],
            "password" => ["required", "string", "min:8", "max:24", "confirmed"],
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
            "required" => ":attribute is required.",
            "email" => "Please enter a valid email.",
            "email.max" => ":attribute must be maximum 48 characters.",
            "unique" => "A user is already registered with this email.",
            "min" => ":attribute must be at least 8 characters.",
            "max" => ":attribute must be maximum 24 characters.",
            "confirmed" => "Passwords do not match."
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
            "first_name" => "First name",
            "last_name" => "Last name",
            "email" => "Email",
            "password" => "Password",
        ];
    }
}
