<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateLaptopRequest extends FormRequest
{
    /**
     * boleh ga nih user ngirim request ini (true = bebas aja)
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * aturan validasi buat form edit, kalo ga sesuai ya ditolak
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'prosessor' => 'required|string|max:255',
            'ram' => 'required|integer|min:1',
        ];
    }
}
