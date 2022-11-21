<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'fname' => ['required', 'string'],
            'lname' => ['required'],
            'dob' => ['required'],
            'nic' => ['required', 'unique:students,nic'],
            'addressNo' => ['required'],
            'address1' => ['required'],
            'address2' => ['string'],
            'city' => ['required'],
            'postcode' => ['required'],
            'telephone' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed'],
        ];
    }
}
