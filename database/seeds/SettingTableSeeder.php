<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'key'        => 'phone',
                'value'      => '*XXXX; (055) 921-11-11',
            ],
            [
                'key'        => 'facebook',
                'value'      => '',
            ],
            [
                'key'        => 'instagram',
                'value'      => '',
            ],
            [
                'key'        => 'site_title',
                'value'      => 'avtokredit.az',
            ],
            [
                'key'        => 'site_url',
                'value'      => 'http://avtokredit.az',
            ],
            [
                'key'       => 'email',
                'value'     => 'info@avtokredit.az'
            ],
            [
                'key'   => 'footer_message_az',
                'value' => 'Administrasiya saytda yerləşdirilən banner və reklam məzmununa görə məsuliyyət daşımır. Hər hansı bir məlumatı, materialı və fotoşəkili administrasiyanın yazılı icazəsi olmadan istifadə etmək qeyri-qanuni hesab ediləcək və Azərbaycan Respublikasının Qanunlarına əsasən cəzalandırılacaqdır.',
            ],
            [
                'key'   => 'footer_message_ru',
                'value' => 'Administrasiya saytda yerləşdirilən banner və reklam məzmununa görə məsuliyyət daşımır. Hər hansı bir məlumatı, materialı və fotoşəkili administrasiyanın yazılı icazəsi olmadan istifadə etmək qeyri-qanuni hesab ediləcək və Azərbaycan Respublikasının Qanunlarına əsasən cəzalandırılacaqdır.',
            ],
            [
                'key'   => 'footer_message_en',
                'value' => 'Administrasiya saytda yerləşdirilən banner və reklam məzmununa görə məsuliyyət daşımır. Hər hansı bir məlumatı, materialı və fotoşəkili administrasiyanın yazılı icazəsi olmadan istifadə etmək qeyri-qanuni hesab ediləcək və Azərbaycan Respublikasının Qanunlarına əsasən cəzalandırılacaqdır.',
            ]
        ];


        foreach($settings as $setting) {
            \App\Models\Setting::create($setting);
        }

    }
}
