<?php

namespace App\Http\Requests\SuperAdmin\TestimonialSettings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'comment' => 'required',
            'rating' => 'required|numeric|min:1|max:5',
        ];
    }

}
