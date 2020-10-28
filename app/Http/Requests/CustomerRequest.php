<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'dia_chi' => 'required',
            'mail' => 'required|email',
            'name' => 'required|max:100',

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Không được để trống',
            'name.max' => 'tên không quá 100 kí tự',
            'dia_chi.required' => 'Không được để trống',
            'mail.required' =>'Không được để trống',
            'mail.email' => 'Sai định dạng, phải là ...@example.com',
        ];
    }
}
