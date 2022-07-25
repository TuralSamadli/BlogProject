<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserMessages extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'  => 'required',
                'email'  => 'required|email',
                'subject'  => 'required',
                'message'  => 'required|min:10',
        ];
    }
    public function messages()
        {
            return [
                'name.required' => 'User name is required',
                'email.required' => 'User email is required',
                'subject.required' => 'Message subject is required',
                'message.required' => 'Message is required'
            ];
        }
}
