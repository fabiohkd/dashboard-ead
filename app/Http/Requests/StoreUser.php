<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [
							'required',
							'min:3',
							'max:255',
							'string'
						],
            'email' => [
							'required',
							'email',
							"unique:users,email,{$this->id},id"
						],
            'password' => [
							'required',
							'min:5',
							'max:15'
						]
        ];
    }
}
