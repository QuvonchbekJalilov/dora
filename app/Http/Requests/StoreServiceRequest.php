<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title_uz' => 'required',
            'title_en' => 'required',
            'title_ru' => 'required',
            'description_uz' => 'required',
            'description_en' => 'required',
            'description_ru' => 'required',
            'image' => 'required|image|max:4048',
            'price' => 'required|string',
            'deadline_uz' => 'required|string',
            'deadline_en' => 'required|string',
            'deadline_ru' => 'required|string',
        ];
    }
}
