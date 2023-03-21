<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'code' => 'required|unique:suppliers',
            'name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'code.required' => 'Code wajib diisi',
            'code.unique' => 'Code sudah terdaftar',
            'name.required' => 'Nama wajib diisi',
        ];
    }
}
