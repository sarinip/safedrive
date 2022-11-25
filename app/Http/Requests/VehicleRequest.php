<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
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
            'reg_no' => ['required'],
            'owner_name' => ['required' 'string','max:255'],
            'reg_date' => ['required','date'],
            'class' => ['required' 'string','max:200'],
            'model' => ['required' 'string','max:200'],
            'insurance_up_to' => ['required','date'],
        ];
    }

    public function messages()
    {
        return [
            'reg_no.required' => 'Please fill the register number!!',
//            'vorname.required' => 'Vorname ist erforderlich!',
//            'nachname.required' => 'Nachname ist erforderlich!',
//            'telefonnummer.required' => 'Telefonnummer ist erforderlich!',
//            'nachricht.required' => 'Nachricht ist erforderlich!',
        ];
    }
}