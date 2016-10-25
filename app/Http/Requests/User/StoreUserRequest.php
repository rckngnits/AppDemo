<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required',
            // 'address' => 'required',
            'email' => 'required',
            'primary_number' => 'required|integer',
            'secondary_number' => 'integer',
            'password' => 'required',
            'fk_department_id' => 'required|integer'
            //
        ];
    }
}
