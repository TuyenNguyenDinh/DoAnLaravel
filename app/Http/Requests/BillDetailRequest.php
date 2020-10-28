<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillDetailRequest extends FormRequest
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
            'bill_id' => 'required',
            'product_id' => 'required',
            'so_luong_mua' => 'required|min:1000',
            'don_gia' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'bill_id.required' => trans('Không được để trống'),
            'product_id.required' => trans('Không được để trống'),
            'so_luong_mua.required' => trans('Không được để trống'),
            'so_luong_mua.min' => trans('Không được dưới 1000'),
            'don_gia.required' => trans('Không được để trống'),
        ];
    }
}
