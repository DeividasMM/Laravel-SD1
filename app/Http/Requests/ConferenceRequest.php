<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConferenceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'time' => 'required',
            'address' => 'required',
            'lecturers' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Pavadinimas yra privalomas',
            'description.required' => 'Aprašymas yra privalomas',
            'date.required' => 'Data yra privaloma',
            'time.required' => 'Laikas yra privalomas',
            'address.required' => 'Adresas yra privalomas',
            'lecturers.required' => 'Lektoriai yra privalomi'
        ];
    }
}
