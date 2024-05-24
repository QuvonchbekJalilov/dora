<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title_uz' => 'required',
            'title_en' => 'required',
            'title_ru' => 'required',
            'description_uz' => 'required',
            'description_en' => 'required',
            'description_ru' => 'required',
            'image' => 'nullable|image|max:4048',
            'price' => 'required|string',
            'deadline_uz' => 'required|string',
            'deadline_en' => 'required|string',
            'deadline_ru' => 'required|string',
        ];
    }
}
