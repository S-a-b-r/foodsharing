<?php

namespace App\Http\Requests\Admin\Acts;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'seller_id'=> 'required|integer|exists:users,id',
            'customer_id'=> 'required|integer|exists:users,id',
            'act_img'=>'nullable|file',
        ];
    }
}
