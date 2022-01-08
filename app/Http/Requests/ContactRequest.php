<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactRequest extends Request
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
            "nom" => "required|min:2|max:30",
            "email" => "required|email",
            "tel" =>    "min:6|max:30",
            "sujet" => "required|max:100",
            "texte" => "required"
        ];
    }
}
