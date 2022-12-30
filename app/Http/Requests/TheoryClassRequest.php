<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TheoryClassRequest extends FormRequest
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
            'instructor' => ['required'],
            'classname' => ['required'],
            'classdate' => ['required','date'],
            'classfrom' => ['required','date_format:H:i'],
            'classto' => ['required','date_format:H:i','after:classfrom'],
            'headcount' => ['required','numeric'],
        ];
    }
}
