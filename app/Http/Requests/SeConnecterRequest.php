<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeConnecterRequest extends FormRequest
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
            'pseudo' => 'required|min:5',
			'mot_de_passe' => 'required|min:6'
        ];
    }
}