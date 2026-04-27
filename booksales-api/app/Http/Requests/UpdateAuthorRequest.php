<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAuthorRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
{
    return [
        'name'  => ['sometimes', 'string', 'max:255'],
        'photo' => ['sometimes', 'image', 'mimes:jpg,png,jpeg', 'max:2048'],
        'bio'   => ['sometimes', 'string', 'max:500'],
    ];
}

public function messages(): array
{
    return [
        'name.string' => 'Nama author harus berupa teks.',
        'name.max'    => 'Nama author maksimal 255 karakter.',

        'photo.image' => 'Photo harus berupa gambar.',
        'photo.mimes' => 'Photo harus berformat jpg, png, atau jpeg.',
        'photo.max'   => 'Ukuran photo maksimal 2MB.',

        'bio.string' => 'Bio harus berupa teks.',
        'bio.max'    => 'Bio maksimal 500 karakter.',
    ];
}
}
