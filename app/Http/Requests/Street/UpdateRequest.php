<?php

namespace App\Http\Requests\Street;

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
            'town_pre' => 'string',
            'town' => 'string',
            'street_pre' => 'string',
            'street' => 'string',
            'house' => 'string',
            'flat' => '',
            'user_id' => '',
            'user_id_txt' => '',
        ];
    }
}
