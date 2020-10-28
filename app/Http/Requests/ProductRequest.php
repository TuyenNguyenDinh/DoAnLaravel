<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'ten' => 'required|max:50',
            'gia_sp' => 'required|numeric|max:1000000000|min:1',
            'so_luong' => 'required|numeric|min:1',
            'anh' => 'required|image|max:2048',
            'thong_tin_cu_the' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'ten.required' => 'Không được để trống',
            'ten.max' => 'tên không quá 50 kí tự',
            'gia_sp.required' => 'Không được để trống',
            'gia_sp.max' => 'Gía không được vượt quá 100.000.000',
            'gia_sp.min' => 'Giá không được < 1',
            'so_luong.required' => 'Không được để trống',
            'so_luong.min' => 'Số lượng không được < 1',
            'anh.required' => 'Phải chọn ít nhất 1 ảnh',
            'anh.image' => 'Không đúng định dạng ảnh',
            'anh.max' => 'Dung lượng ảnh không được vượt quá 2MB',  
            'thong_tin_cu_the.required' => 'Không được để trống',
        ];
    }
}
