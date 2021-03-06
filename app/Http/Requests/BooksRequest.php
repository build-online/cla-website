<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BooksRequest extends FormRequest
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
            'title' => 'required|unique:books|min:5|max:60',
            'author_id' => 'required|integer',
            'category_id' => 'array|required',
            'photo' => 'required|url',
            'description' => 'required|min:10',
            'cost' => 'required|numeric'
        ];
    }
}
