<?php
namespace App\Http\Requests\Api;

use Dingo\Api\Http\FormRequest as BaseFormRequest;

class FormRequest extends BaseFormRequest
{
    public function authorize()
    {
        return true;
    }
}
// namespace App\Http\Requests\Api;

// use Illuminate\Foundation\Http\FormRequest;

// class FormRequest extends FormRequest
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
