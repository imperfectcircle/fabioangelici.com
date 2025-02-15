<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactServiceRequest extends FormRequest
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
            'service' => 'required',
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email:rfc,dns',
            'phone' => 'required|min:5',
            'message' => 'required|string|min:10',
            'privacy' => 'required|accepted',

        ];
    }

    public function messages()  {
        return [
            'service.required' => 'Il campo Servizio è obbligatorio',
            'name.required' => 'Il campo Nome è obbligatorio',
            'name.min' => 'Il campo Nome deve contenere almeno 3 caratteri',
            'name.max' => 'Il campo Nome può contenere al massimo 255 caratteri',
            'email.required' => 'Il campo Indirizzo Email è obbligatorio',
            'email.email' => 'Il campo Indirizzo Email deve essere un indirizzo email valido',
            'phone.required' => 'Il campo Numero di Telefono è obbligatorio',
            'phone.min' => 'Il campo Numero di Telefono deve contenere almeno 5 caratteri',
            'message.required' => 'Il campo Messaggio è obbligatorio',
            'message.min' => 'Il campo Messaggio deve contenere almeno 10 caratteri',
            'privacy.required' => 'Il campo Privacy è obbligatorio',
            'privacy.accepted' => 'Devi accettare la Privacy Policy'
        ];
    }
}
