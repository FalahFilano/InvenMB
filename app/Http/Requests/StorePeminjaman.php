<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePeminjaman extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'keterangan' => 'required',
            'inventaris.*.id' => 'required|exists:inventaris,id',
            'inventaris.*.jumlah' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'keterangan.required' => 'Kolom Keterangan harus diisi.',
            'inventaris.*.id.required' => 'Kolom Item harus diisi.',
            'inventaris.*.jumlah.required' => 'Kolom Jumlah harus diisi.',
            'inventaris.*.id.exists' => 'Item yang dipilih tidak valid.',
            'inventaris.*.jumlah.numeric' => 'Jumlah yang dimasukkan tidak valid.',
        ];
    }
}
