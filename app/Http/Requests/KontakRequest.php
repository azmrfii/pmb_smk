<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KontakRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'map' => 'required',
            'lokasi' => 'required',
            'email' => ['required', 'email'],
            'no_hp' => 'required'
        ];
    }
}
