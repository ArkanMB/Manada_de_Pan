<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnimalRequest extends FormRequest
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
          'nombre' => 'required|max:30|min:3',
          'tipo'   => 'required|max:30|min:4',
          'raza'   => 'required|max:30|min:3',
          'sexo'   => 'required|max:20|min:4',
          'edad'   => 'required|max:4|min:1'
        ];
    }
}
