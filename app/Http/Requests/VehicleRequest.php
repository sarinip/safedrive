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
            'owner_name' => ['required'],
            'reg_date' => ['required'],
            'class' => ['required'],
            'model' => ['required'],
            'insurance_up_to' => ['required'],
        ];
    }
}