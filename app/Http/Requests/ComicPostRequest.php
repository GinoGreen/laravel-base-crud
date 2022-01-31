<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicPostRequest extends FormRequest
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
            'title' => 'required|max:50|min:3',
            'price' => 'required',
            'imgUrl' => 'required|max:255|min:6',
            'sale_date' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Titolo obbligatorio',
            'title.max' => 'Titolo massimo :max caratteri',
            'title.min' => 'Titolo almeno :min caratteri',
            'price.required' => 'Prezzo obbligatorio',
            'imgUrl.required' => 'URL obblicatoria',
            'imgUrl.max' => 'URL massimo :max caratteri',
            'imgUrl.min' => 'URL almeno :min caratteri',
            'sale_date.required' => 'Data obbligatoria',
        ];
    }
}
