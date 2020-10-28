<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillRequest extends FormRequest
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
            'customer_id' => 'required',
            'ngaylap_hd' => 'required',
            'noi_nhan_hang' => 'required',
            'tong_tien' => 'required',
            'ghi_chu' => 'required',
            'user_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'customer_id.required' => 'Không được để trống',
            'ngaylap_hd.required' => 'Không được để trống',
            'noi_nhan_hang.required' => 'Không được để trống',
            'tong_tien.required' => 'Không được để trống',
            'ghi_chu.required' => 'Không được để trống',
            'user_id.required' =>'Không được để trống',


        ];
    }
}
