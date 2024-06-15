<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateControllerTeste extends FormRequest
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
            'name'=>[
                'required',
                'min:5',
                'max:30',
                'unique: user'
            ],
            'descriçao'=>[
                'nullable',
                'min:7',
                'max:20',
            ],
            'preço'=>[
                'required',
                'min:2',
                'max:2',
<<<<<<< HEAD
            ], 
=======
            ],
>>>>>>> 1645bb75c27b852a50a213a864641a8d45f78ea6
        ];
    }
}
