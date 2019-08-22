<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|string|min:5|',
            'parent_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Nhập tên danh mục',
            'name.string' => 'Tên danh mục là một chuỗi kí tự',
            'name.min' => 'Tên danh mục ít nhất 5 kí tự',
            'parent_id.required' => 'Nhập parent id'
        ];
    }
}
