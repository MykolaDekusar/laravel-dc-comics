<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicPostRequest extends FormRequest
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
            'title' => 'required|string|min:3|max:50',
            'description' => 'string|min:10|nullable',
            'thumb' => 'string|max:255|nullable',
            'price' => 'required|string',
            'series' => 'required|string',
            'sale_date' => 'nullable| date_format:Y-m-d',
            'artists' => 'string|nullable',
            'writers' => 'string|nullable'
        ];
    }
}
