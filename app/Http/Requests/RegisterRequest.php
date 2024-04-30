<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'nama_lengkap' => [
                'required',
                'regex:/^[A-Za-z\s]+$/',
            ],
            'tgl_lahir' => 'required',
            'email' => 'required|email|unique:users,email',
            'no_tlp' => 'required|numeric|regex:/^08[0-9]{9}$/',
            'alamat' => 'required',
            'kota' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'

        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Tidak boleh kosong',
            'password.confirmed' => 'Password tidak cocok',
            'nama_lengkap.regex' => 'Hanya huruf dan spasi yang diperbolehkan',
            'email.unique' => 'Email sudah terdaftar',
            'no_tlp.regex' => 'Format nomor handphone tidak sesuai',
        ];
    }

    // protected function prepareForValidation()
    // {
    //     // Manipulasi nomor telepon jika diperlukan
    //     $noTlp = $this->input('no_tlp');
    //     // Pastikan nomor telepon selalu dimulai dengan '+62'
    //     if (!str_starts_with($noTlp, '+62')) {
    //         $noTlp = '+62' . ltrim($noTlp, '0');
    //     }
    //     $this->merge(['no_tlp' => $noTlp]);
    // }
}
