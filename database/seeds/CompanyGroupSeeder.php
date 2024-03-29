<?php

use Illuminate\Database\Seeder;

class CompanyGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $file = file_get_contents(storage_path('app/public/company_groups.json'));
      $data = json_decode($file,true);
      foreach ($data as $key => $value) {
        \App\Models\CompanyGroup::create([
          'name:az' => $value['name:az'][0],
          'name:en' => $value['name:az'][0],
          'name:ru' => $value['name:ru'][0],
          'status' => 1
        ]);
      }
    }
}
