<?php

namespace App\Http\Requests;

use App\Rules\PhoneNumbValidation;
use Illuminate\Foundation\Http\FormRequest;

class AddCarRequest extends FormRequest
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
            'name'          => 'required|string|min:3|max:100',
            'phone'          => ['required', 'min:14', 'max:50', new PhoneNumbValidation(['(055)', '(050)', '(077)', '(070)', '(051)', '(099)'])],
//            'description'          => 'required|string|min:3',
            'year'          => 'required',
            'price'          => 'required',
            'mileage'          => 'required',
            'power'          => 'required',
            'email'          => 'required',
//            'visit'          => 'required',
            'car_brand_id'    => 'required',
            'car_model_id'    => 'required',
            'gear_id'    => 'required',
            'body_type_id'    => 'required',
            'transmission_id'    => 'required',
            'fuel_usage'    => 'required',
            'color_id'    => 'required',
            'fuel_type_id'    => 'required',
//            'technical_specification_id'    => 'required',
            'engine_volume'    => 'required',
            'city_id'    => 'required',
//            'type'    => 'required',
            'currency_id'    => 'required',
//            'status'        => 'required|boolean',
//            'images'=> 'required',
            //'images.*'      => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000|min:3', //multi image validate Rauf


        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Ad göstərilməlidir',
            'phone.required' => 'Telefon göstərilməlidir',
            'year.required' => 'Buraxılış ili göstərilməlidir',
            'price.required' => 'Qiymət göstərilməlidir',
            'mileage.required' => 'Yürüş göstərilməlidir',
            'power.required' => 'Muhərrikin gücü göstərilməlidir',
            'email.required' => 'Email göstərilməlidir',
            'car_brand_id.required' => 'Marka göstərilməlidir',
            'car_model_id.required' => 'Model göstərilməlidir',
            'gear_id.required' => 'Ötürücü göstərilməlidir',
            'body_type_id.required' => 'Ban növü göstərilməlidir',
            'transmission_id.required' => 'Sürətlər qutusu göstərilməlidir',
            'fuel_usage.required' => 'Yanacaq sərfiyyatı göstərilməlidir',
            'color_id.required' => 'Rəng göstərilməlidir',
            'fuel_type_id.required' => 'Yanacaq növü göstərilməlidir',
            'engine_volume.required' => 'Mühərrikin həcmi göstərilməlidir',
            'city_id.required' => 'Şəhər göstərilməlidir',
            'currency_id.required' => 'Valyuta göstərilməlidir',
            'images.required' => 'Şəkil göstərilməlidir',
            'images.min' => 'Ən az 3 şəkil olmalıdır',

        ];
    }
}
