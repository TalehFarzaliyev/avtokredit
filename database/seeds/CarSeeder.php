<?php

use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $car = [
            "name" => "TEST NAME",
            "status" => "1",
            "email" => "test@hotmail.com",
            "phone" => "05050414874",
            "visit" => "4564",
            "year" => "2019",
            "price" => "554.00",
            "mileage" => "515484",
            "power" => "445",
            "car_brand_id" => "6",
            "car_model_id" => "28",
            "body_type_id" => "6",
            "city_id" => "2",
            "transmission_id" => "2",
            "gear_id" => "2",
            "color_id" => "2",
            "fuel_type_id" => "2",
            "engine_volume" => "150",
            "company_id" => null,
            "type" => "1",
            "currency_id" => "3",
            "credit" => "1",
            "barter" => "1",
            "deposit" => "1",
            "deposit_period" => "56",
            "deposit_amount" => "565",
            "deposit_daily_pay" => "4564",
            "credit_period" => "64",
            "credit_initial_amount" => "4645",
            "credit_monthly_amount" => "564",
            "technical_specification_id" => [
                0 => "1",
                1 => "2",
                2 => "3",
                3 => "7",
                4 => "8",
                5 => "9",
                6 => "13",
            ],
            "description" => "<p>asdasdasdasdas</p>",
        ];

        \App\Models\Car::create($car);
    }
}
