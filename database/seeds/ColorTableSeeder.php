<?php

use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $file = file_get_contents(storage_path('app/public/colors.json'));
      $data = json_decode($file,true);
      foreach ($data as $key => $value) {
        \App\Models\Color::create([
          'name:az' => $value['name:az'][0],
          'name:en' => $value['name:az'][0],
          'name:ru' => $value['name:ru'][0],
          'status' => 1
        ]);
      }
    }
}

