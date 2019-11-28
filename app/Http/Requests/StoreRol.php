<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRol extends FormRequest
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
            'name'=>'required|max:50|min:2|unique:rols'
        ];
    }

    public function messages()
    {
        return [
            //'name.unique' => 'El campo nombre ya ha sido tomado.',
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'nombre',
        ];
    }

}
