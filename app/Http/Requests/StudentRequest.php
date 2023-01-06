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
            'fname' => ['required', 'string','max:255'],
            'lname' => ['required', 'string','max:255'],
            'dob' => ['required','date','before:today - 18 years'],
            'nic' => ['required', 'unique:students,nic','regex:/^[0-9]{9}V$/'],
            'addressNo' => ['required'],
            'address1' => ['required'],
            'city' => ['required','max:255'],
            'postcode' => ['required','max:255'],
            'telephone' => ['required','numeric'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed','min:6'],
        ];
    }

        public function messages()
    {
        return [
            'dob.before' => 'The date of birth must be 18 or older.',
        ];
    }
}