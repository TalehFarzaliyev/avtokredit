<?php

use Illuminate\Database\Seeder;

class TransmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                'status' => 1,
                'name:az' => 'Mexaniki',
                'name:en' => 'Mexaniki',
                'name:ru' => 'Механическая'
            ],[
                'status' => 1,
                'name:az' => 'Avtomat',
                'name:en' => 'Avtomat',
                'name:ru' => 'Автомат'
            ],[
                'status' => 1,
                'name:az' => 'Robotlaşdırılmış',
                'name:en' => 'Robotlaşdırılmış',
                'name:ru' => 'Роботизированные'
            ],[
                'status' => 1,
                'name:az' => 'Variator',
                'name:en' => 'Variator',
                'name:ru' => 'Вариатор'
            ],
        ];
        foreach ($array as $arr){
            \App\Models\Transmission::create($arr);
        }
    }
}
