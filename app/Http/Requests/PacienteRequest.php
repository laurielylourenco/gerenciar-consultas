<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
           'name' => 'required|max:100',
            'phone' => ['required','regex:/^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/'],
            'street' => 'required',
            'number_house' => 'required',
        ];
    }


    public function messages()
    {
       return[
        'name.required' => 'Nome não digitado',
        'phone.regex' => 'celular:(xx)9xxxx-xxxx ou fixo:(xx)xxxx-xxxx',
        'street.required' => 'Rua nao digitado',
        'number_house' => 'Numero nao digitado'
       ];
    }
}
