<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateComicPostRequest extends FormRequest
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
            // 'title' => 'required|string|min:3|max:50|unique:comics,title,' . $comic->id,
            'title' => ['required', 'string', 'min:3', 'max:50', Rule::unique('dc_comics')->ignore($this->comic)],
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
