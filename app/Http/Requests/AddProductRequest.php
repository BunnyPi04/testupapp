<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'price' => 'required',
            'accessories' => 'required',
            'img' => 'image',
            'warranty' => 'required',
            'condition' => 'required',
            'description' => 'required',
            'cate' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'img.image' => 'Không đúng định dạng ảnh',
            'name.required' => 'Không được để trống tên sản phẩm',
            'price.required' => 'Không được để trống giá sản phẩm',
            'accessories.required' => 'Không được để trống phụ kiện',
            'warranty.required' => 'Không được để trống bảo hành sản phẩm',
            'condition.required' => 'Không được để trống tình trạng sản phẩm',
            'description.required' => 'Không được để trống thông tin sản phẩm',
            'cate.required' => 'Không được để trống danh mục sản phẩm',
        ];
    }
}
