<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactGenericRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email:rfc,dns',
            'phone' => 'required|min:5',
            'message' => 'required|string|min:10',
            'privacy' => 'required|accepted',
        ];
    }
}
