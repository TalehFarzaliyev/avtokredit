<?php

namespace App\Http\Requests;

use App\Rules\PhoneNumbValidation;
use Illuminate\Foundation\Http\FormRequest;

class PhoneGsmRequest extends FormRequest
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
            'phone' => ['required', 'min:14', 'max:50', new PhoneNumbValidation(['(055)', '(050)', '(077)', '(070)', '(051)', '(099)'])]
        ];
    }
}
