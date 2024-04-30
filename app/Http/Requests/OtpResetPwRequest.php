<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OtpResetPwRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'token1' => 'required|string',
            'token2' => 'required|string',
            'token3' => 'required|string',
            'token4' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'otp harus di isi'
        ];
    }
}