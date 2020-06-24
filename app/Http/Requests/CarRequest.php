<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'phone'          => 'required|min:3|max:50',
            'description'          => 'required|string|min:3',
            'year'          => 'required',
            'price'          => 'required',
            'mileage'          => 'required',
            'power'          => 'required',
            'email'          => 'required',
            'visit'          => 'required',
            'car_brand_id'    => 'required',
            'car_model_id'    => 'required',
            'body_type_id'    => 'required',
            'transmission_id'    => 'required',
            'color_id'    => 'required',
            'fuel_type_id'    => 'required',
            'engine_volume'    => 'required',
            'city_id'    => 'required',
            'type'    => 'required',
            'currency_id'    => 'required',
            'status'        => 'required|boolean',
            'images'=> 'required',
            'images.*'      => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000' //multi image validate Rauf
        ];
    }
}
