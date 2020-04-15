<?php

namespace App\Http\Requests\contacto;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
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

                'nombre_contacto' =>  'required',
               'apellido_contacto' => 'required',
                'cedula_contacto' => 'required | numeric',
                'telefono_contacto'=> 'required | numeric '

            //
        ];
    }
}
