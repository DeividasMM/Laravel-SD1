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
}
