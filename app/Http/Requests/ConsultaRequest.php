<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultaRequest extends FormRequest
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
            'name' => 'required|max:50',
            'day' => 'required|date',
            'process' => 'required',
            'hours' => 'required',
            'dentist' => 'required',
            'money' => ''

        ];
    }
    public function messages()
    {
       return[
        'name.required' => 'Nome não selecionado',
        'dentist.required' => 'Dentista não selecionado'
        
       ];
    }
}
