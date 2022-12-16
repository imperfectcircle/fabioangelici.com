<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'service' => 'required',
            'name' => 'required|min:3',
            'email' => 'required|email:rfc,dns',
            'phone' => 'required',
            'message' => 'required',
            'privacy' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'service.required' => 'Per favore seleziona il tipo di servizio che ti interessa.',
            'name.required' => 'Per favore inserisci il tuo nome.',
            'name.min' => 'Il campo nome deve avere una lunghezza superiore ai 3 caratteri.',
            'email.required' => 'Per favore inserisci la tua email.',
            'email.email' => 'Per favore inserisci un indirizzo email valido.',
            'message.required' => 'Per favore inserisci il tuo messaggio.',
            'privacy.required' => 'Devi dare il consenso al trattamento dei dati',
        ];
    }
}
