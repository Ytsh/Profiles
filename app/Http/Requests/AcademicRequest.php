<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcademicRequest extends FormRequest
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
            'equivalent' => [
                'required' , 'array',
            ],
            'grade' => [
                'required', 'array',
            ],
            'university' => [
                'required', 'array',
            ],
            'p_year' => [
                'required', 'array',    
            ],
            'equivalent.*' => [
                'required' , 
            ],
            'grade.*' => [
                'required', 
            ],
            'university.*' => [
                'required', 
            ],
            'p_year.*' => [
                'required',     
            ]
        
        ];
    }
}
