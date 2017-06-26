<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class CauHoiThuongGapRequest extends FormRequest
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
            'cau_hoi' => 'required',
            'cau_tra_loi' => 'required',
        ];
    }
    public function messages() {
        return [
            'cau_hoi.required' => 'Bạn cần nhập câu hỏi',
            'cau_tra_loi.required' => 'Bạn cần nhập câu trả lời',
        ];
    }
}