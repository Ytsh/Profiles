<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalRequest extends FormRequest
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
        // dd('j');
        return [
            'fname' => [
                'required', 'min:3'
            ],
            'lname' => [
                'required', 'min:3'
            ],
            'address1' => [
                'required', 'min:3'
            ],
            'postcode' => [
                'required', 'min:3'
            ],
            'state' => [
                'required',
            ],
            'phone' => [
                'required', 'min:10','max:10'
            ],
            'address2' => [
                'required', 'min:3'
            ],
            'email' => [
                'required',
            ],
            'area' => [
                'required',
            ],
            'education' => [
                'required',
            ],
            'country' => [
                'required',
            ],
            'region' => [
                'required',
            ],
        ];
    }
    
    
}
