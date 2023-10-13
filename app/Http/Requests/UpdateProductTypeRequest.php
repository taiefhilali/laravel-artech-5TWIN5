<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductTypeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'product_type_id'=>[
                'required',
                'integer'
            ],        
            'title'=>[
                'required',
                'string'
            ],
            'description'=>[
                'required',
                'string',
                'max:255'
            ],
            'artist'=>[
                'required',
                'string'
            ],
            'creation_date'=>[
                'required',
                'date'
            ],
            'image_url'=>[
                'nullable',
                'mimes:jpg,jpeg,png'
            ] ,
            'price'=>[
                'required',
                'numeric',
                'min:0'
            ],
            'dimensions'=>[
                'nullable',
                'string'
            ],  
             'medium'=>[
                'nullable',
                'string'
            ], 
            'quantity'=>[
                'required',
                'integer',
                'min:0'
            ]         
                
        
        ];
    }
}
