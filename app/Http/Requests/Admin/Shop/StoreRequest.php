<?php

namespace App\Http\Requests\Admin\Shop;

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
            'name'=> 'required|string',
            'second_name'=> 'string|nullable',
            'email'=>'required|string|unique:users',
            'password'=>'required|string',
            'role_id'=>'required|integer',
            'personal_data'=>'string|nullable'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Это поле необходимо заполнить',
            'name.string'=>'Это поле должно быть строкой',
            'email.required'=>'Это поле необходимо заполнить',
            'email.unique'=>'Пользователь с таким email уже существует',
            'email.string' => 'Это поле должно быть строкой',
            'role.required'=>'Это поле необходимо заполнить',
            'role.integer'=>'Это поле должно быть числом',
        ]; // TODO: Change the autogenerated stub
    }
}
