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
            'name' =>'required|string|min:5',
            'category_id' => 'required',
            'description' => 'required|string|min:10',
            'price' => 'required',
            'sale_percent' => 'required',
            'stocks' => 'required',
            'is_active' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Nhập tên sản phẩm',
            'name.string' => 'Tên sản phẩm là một chuỗi kí tự',
            'name.min' => 'Tên sản phẩm ít nhất 5 kí tự',
            'category_id.required' => 'Nhập danh mục sản phẩm',
            'description.required' => 'Nhập mô tả sản phẩm',
            'description.string' => 'Mô tả sản phẩm bằng một chuối kí tự',
            'description.min' => 'Mô tả sản phẩm ít nhất 10 kí tự',
            'price.required' => 'Nhập giá sản phẩm',
            'sale_percent.required' => 'Nhập sale_percent',
            'stokcs.required' => 'Nhập stocks',
            'is_active.required' => 'Chọn trạng thái'
        ];
    }
}
