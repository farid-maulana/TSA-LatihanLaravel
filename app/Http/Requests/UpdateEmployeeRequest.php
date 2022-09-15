<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
            'employee_id_number' => 'required',
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'division' => 'required',
            'position' => 'required',
        ];
    }
}
