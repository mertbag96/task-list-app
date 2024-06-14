<?php

namespace App\Http\Requests\Panel\User;

use App\Models\User;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(User $user): bool
    {
        if (Gate::denies('create-users', $user)) {
            abort(403);
        }

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
            "role_id" => ["required", "integer", "gt:0"],
            "team_id" => ["nullable", "integer", "gt:0"],
            "gender" => ["required", "string"],
            "first_name" => ["required", "string", "max:24"],
            "last_name" => ["required", "string", "max:24"],
            "birth_date" => ["required", "date_format:Y-m-d"],
            "email" => ["required", "email", "unique:users", "max:48"],
            "password" => ["required", "min:8", "max:48", "confirmed"],
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
            "min" => ":attribute must be at least 8 characters.",
            "max" => ":attribute must be maximum 24 characters.",
            "role_id.gt" => "Please select a role.",
            "team_id.gt" => "Please select a team.",
            "gender.required" => "Please select a gender.",
            "birth_date.date_format" => "Please enter a valid date.",
            "email" => "Please enter a valid email.",
            "email.max" => ":attribute must be maximum 48 characters.",
            "unique" => "A user is already registered with this email.",
            "confirmed" => "Password do not match."
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
            "gender" => "Gender",
            "role_id" => "Role",
            "team_id" => "Team",
            "first_name" => "First name",
            "last_name" => "Last name",
            "birth_date" => "Birth date",
            "email" => "Email",
            "password" => "Password",
        ];
    }
}
