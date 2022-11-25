<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
            // 'studentid' => ['required'],
            'amount' => ['required','numeric','max:255'],
            'cardname' => ['required','string'],
            'cardnumber' => ['required','numeric','max:255'],
            'expdate' => ['required','string'],
            'cvv' => ['required','numeric','max:200'],
        ];
    }
}