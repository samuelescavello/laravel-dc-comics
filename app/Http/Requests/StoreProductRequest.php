<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'thumb'=>'max:255|nullable',
            'series'=>'max:255|min:3|required',
            'type'=>'max:255|required',
            'price'=>'required|integer|min:1',
        ];
    }

    public function messages(){
        return [
            'thumb.max'=>'Lunghezza massima 255 caratteri',
            'series.required'=>'Campo obbligatorio',
            'series.max'=>'Lunghezza massima 255 caratteri',
            'series.min'=>'Lunghezza minima 3 caratteri',
            'type.required'=>'Campo obbligatorio',
            'type.max'=>'Lunghezza massima 255 caratteri',
            'price.required'=>'Campo obbligatorio',
            'price.min'=>'Valore minimo 1',
            'price.integer'=>'Valore numerico',
        ];
    }
}
