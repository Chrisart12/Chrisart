<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProfilUpdateRequest extends Request
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
        $id = $this->profil;
        return [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id
        ];

    }
}
