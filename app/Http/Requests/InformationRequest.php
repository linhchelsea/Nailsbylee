<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformationRequest extends FormRequest
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
            'name' => 'required|min:2|max:200',
            'email' => 'required|email|min:6|max:200',
            'phone' => 'required|max:20',
            'facebook' => 'required|url|max:300',
            'twitter' => 'required|url|max:300',
            'instagram' => 'required|url|max:300',
            'address' => 'required|min:6',
        ];
    }
    public function messages()
    {
        return [
            'facebook.url' => 'The facebook format is not an url',
            'instagram.url' => 'The instagram format is not an url',
            'twitter.url' => 'The twitter format is not an url'
        ];
    }
}
