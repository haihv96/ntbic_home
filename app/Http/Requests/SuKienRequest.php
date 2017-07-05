<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuKienRequest extends FormRequest
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
    public function rules(){
        return [
            'ten' => 'required',
            'noi_dung' => 'required',
            'tom_tat' => 'required',
            'hinh_anh' => 'mimes:jpeg,bmp,png',
            'ngay_bat_dau' => 'required',
            'ngay_ket_thuc' => 'required|date|after:ngay_bat_dau',
        ];
    }
     public function messages() {
        return [
            'ten.required' => 'Bạn cần nhập tên tin tức',
            'noi_dung.required' => 'Bạn cần nhập nội dung tin tức',
            'tom_tat.required' => 'Bạn cần nhập nội dung tóm tắt của tin tức',
            'hinh_anh.mimes' => 'Bạn chỉ được chọn file (jpeg,bmp,png)',
            'ngay_bat_dau.required' => 'Bạn cần chọn ngày',
            'ngay_ket_thuc.required' => 'Bạn cần chọn ngày kết thúc hoặc chọn ngày kết thúc lớn hơn ngày bắt đầu',
            'ngay_ket_thuc.after:ngay_bat_dau' => 'Bạn cần chọn ngày kết thúc lớn hơn ngày bắt đầu',
        ];
    }
}
