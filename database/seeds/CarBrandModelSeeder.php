<?php

use Illuminate\Database\Seeder;

class CarBrandModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = file_get_contents(storage_path('app/public/cars.json'));

        $data = json_decode($file,true);

        foreach ($data as $datum){
            $brand = \App\Models\CarBrand::create([
                'name' => $datum['brand'],
                'status' => 1
            ]);

            foreach ($datum['models'] as $model){
                \App\Models\CarModel::create([
                    'name' => $model,
                    'car_brand_id' => $brand->id,
                    'status' => 1,
                ]);
            }
        }
    }
}
