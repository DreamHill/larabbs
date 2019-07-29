<?php
/*

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class VerificationCodesController extends Controller
{
    public function store()
    {
        return $this->response->array(['test_message' => 'store verification code']);
    }
}*/


namespace App\Http\Requests\Api;

class VerificationCodeRequest extends FormRequest
{
    // public function authorize()
    // {
    //     return true;
    // }

    public function rules()
    {
        return [
            'phone' => [
                'required',
                'regex:/^((13[0-9])|(14[5,7])|(15[0-3,5-9])|(17[0,3,5-8])|(18[0-9])|166|198|199)\d{8}$/',
                'unique:users'
            ]
        ];
    }
}

// namespace App\Http\Requests\Api;

// use Illuminate\Foundation\Http\FormRequest;

// class VerificationCodeRequest extends FormRequest
// {
//     public function authorize()
//     {
//         return false;
//     }
//     public function rules()
//     {
//         return [
//             //
//         ];
//     }
// }
