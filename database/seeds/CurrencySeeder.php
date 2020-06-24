<?php

use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
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
                'title' => 'Euro',
                'code'  => 'EUR',
                'symbol_left' => '',
                'symbol_right' => '€',
                'decimal_places' => '2',
                'value' => '0.86073334',
                'status' => 1,
                'sort'      => 3,
                'created_at'  => now(),
                'updated_at'    => now()
            ],
            [
                'title' => 'US Dollar',
                'code'  => 'USD',
                'symbol_left' => '',
                'symbol_right' => '$',
                'decimal_places' => '2',
                'value' => '1.00000000',
                'status' => 1,
                'sort'      => 2,
                'created_at'  => now(),
                'updated_at'    => now()
            ],
            [
                'title' => 'Manat',
                'code'  => 'AZN',
                'symbol_left' => '',
                'symbol_right' => '₼',
                'decimal_places' => '2',
                'value' => '1.70000000',
                'status' => 1,
                'sort'      => 1,
                'created_at'  => now(),
                'updated_at'    => now()
            ],
        ];

        \App\Models\Currency::insert($array);
    }
}
