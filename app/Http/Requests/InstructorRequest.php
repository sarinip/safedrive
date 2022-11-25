<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstructorRequest extends FormRequest
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
            'dob' => ['required','date'],
            'nic' => ['required', 'unique:instructors,nic','max:255'],
            'addressNo' => ['required'],
            'address1' => ['required'],
            'address2' => ['string'],
            'city' => ['required','max:255'],
            'postcode' => ['required','max:255'],
            'telephone' => ['required','numeric'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed','min:6'],
        ];
    }
}