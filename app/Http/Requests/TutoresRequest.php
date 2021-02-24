<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TutoresRequest extends FormRequest
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
            'empresa',
            'nif' => 'required',
            'documento' => 'required',
            'nombre' => 'required',
            'apellido1' => 'required',
            'apellido2',
            'documento_pais' => 'required',
            'provincia' => 'required',
            'municipio' => 'required',
            'status',
            'telefono',
            'email',
        ];
    }

    public function messages()
    {
        return [
            'nif.required' => 'Please, input your NIF',
            'documento.required' => 'Please input your document type',
            'nombre.required' => 'Please input your name',
            'apellido1.required' => 'Please input your first surname',
            'documento_pais.required' => 'Please input your country\'s document',
            'provincia.required' => 'Please input your province',
            'municipio.required' => 'Please input your county',
        ];
    }
}