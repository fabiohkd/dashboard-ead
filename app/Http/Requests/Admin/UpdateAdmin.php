<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdmin extends FormRequest
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
						'nullable',
						'email',
						"unique:users,email,{$this->id},id"
					],
					'password' => [
						'nullable',
						'min:5',
						'max:15'
					]
				];
    }
}
