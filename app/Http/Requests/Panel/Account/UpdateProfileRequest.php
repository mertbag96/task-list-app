<?php

namespace App\Http\Requests\Panel\Account;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProfileRequest extends FormRequest
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
            "team_id" => ["nullable", "integer", "gt:0"],
            "gender" => ["required", "string"],
            "first_name" => ["required", "string", "max:24"],
            "last_name" => ["required", "string", "max:24"],
            "birth_date" => ["nullable", "date_format:Y-m-d"],
            "email" => ["required", "email", Rule::unique('users')->ignore(auth()->user()["id"]), "max:48"],
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
            "team_id.gt" => "Please select a team.",
            "gender.required" => "Please select a gender.",
            "birth_date.date_format" => "Please enter a valid date.",
            "email" => "Please enter a valid email.",
            "email.max" => ":attribute must be maximum 48 characters.",
            "unique" => "A user is already registered with this email.",
            "max" => ":attribute must be maximum 24 characters.",
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
            "birth_date" => "Birth date",
            "email" => "Email",
        ];
    }
}
