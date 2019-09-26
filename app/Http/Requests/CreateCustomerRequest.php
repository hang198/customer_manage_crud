<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCustomerRequest extends FormRequest
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
            'name' => 'required|min:3|max:8',
            'age' => 'required|numeric|min:18'
        ];
    }
    public function messages()
    {
        $message = [
            'name.required' => 'Tên không được để trống',
            'name.min' => 'Tên phải có ít nhất 3 kí tự',
            'name.max' => 'Tên có tối đa 8 kí tự',
            'age.required' => 'Tuổi không được để trống',
            'age.numeric' => 'Tuổi phải là một số',
            'age.min' => 'Tuổi phải trên 18'
        ];
        return $message;
    }
}
