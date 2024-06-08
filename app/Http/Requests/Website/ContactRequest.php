<?php

namespace App\Http\Requests\Website;

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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "first_name" => ["required", "string", "max:24"],
            "last_name" => ["required", "string", "max:24"],
            "email" => ["required", "email", "max:48"],
            "phone" => ["required", "numeric"],
            "message" => ["required", "string", "max:500"],
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
            "max" => ":attribute must be maximum 24 characters.",
            "email" => "Please enter a valid email.",
            "email.max" => ":attribute must be maximum 48 characters.",
            "phone.numeric" => "Please enter a valid phone number.",
            "message.max" => ":attribute must be maximum 500 characters.",
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
            "phone" => "Phone",
            "message" => "Message",
        ];
    }
}
