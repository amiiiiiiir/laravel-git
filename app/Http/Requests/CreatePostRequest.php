<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'title'=>['required','max:20'],
            'body'=>'required',
            'file'=>['required','max:700','mimes:jpg,png,jpeg']
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'لطفا عنوان خود را وارد نمایید',
          'title.max'=>'تعداد کاراکتر های عنوان نباید بیشتر از 10 کاراکتر باشد',
            'body.required'=>'لطفا توضیحات خود را وارد نمایید',
            'file.required'=>'تصویر مورد نظر خود را آپلود نمایید',
            'file.max'=>'حجم فایل ارسالی بیشتر از یک مگابایت است ',
            'file.mimes'=>'فایل ارسالی باید در فرمت های jpegوjpgوpng باشد'
        ];
    }
}
