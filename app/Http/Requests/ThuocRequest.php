<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThuocRequest extends FormRequest
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
            'tenthuoc'=>'required',
            'soluong'=>'required|numeric',
            'ngayhethan'=>'required|date',
            'giasi'=>'required|numeric',
            'giale'=>'required|numeric',
            'soke'=>'required|numeric',
        ];
    }
    public function messages()
    {
        return[
            'tenthuoc.required'=>"Nhập tên thuốc!",
            'soluong.required'=>'Nhập số lượng!',
            'soluong.numeric'=>'Phải là kiểu số!',
            'giasi.required'=>'Nhập giá bán sĩ!',
            'giasi.numeric'=>'Phải là kiểu số!',
            'giale.required'=>'Nhập giá bán lẻ!',
            'giale.numeric'=>'Phải là kiểu số!',    
            'soke.required'=>'Nhập số kệ!',
            'soke.numeric'=>'Phải là kiểu số!',   
            'ngayhethan.required'=>'Chọn ngày hết hạn!'         
        ];
    }
}
