<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
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
                'name'      => 'Azerbaijani',
                'code'      => 'az',
                'status'    => 1,
                'direction' => 'ltr',
                'created_at' => now(), //indexde error RAUF,
                'updated_at' => now()
            ],
            [
                'name'      => 'English',
                'code'      => 'en',
                'status'    => 1,
                'direction' => 'ltr',
                'created_at' => now(), //indexde error RAUF,
                'updated_at' => now()
            ],
            [
                'name'      => 'Russian',
                'code'      => 'ru',
                'status'    => 1,
                'direction' => 'ltr',
                'created_at' => now(), //indexde error RAUF,
                'updated_at' => now()
            ]
        ];

        \App\Models\Language::insert($array);
    }
}
