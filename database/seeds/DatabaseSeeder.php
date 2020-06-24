<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionTableSeeder::class);
        $this->call(BanTypeSeeder::class);
        $this->call(CarBrandModelSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(ColorTableSeeder::class);
        $this->call(CompanyGroupSeeder::class);
        $this->call(FuelTypeTableSeeder::class);
        $this->call(GearTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(TransmissionSeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(TechnicalSpecificationSeeder::class);
        $this->call(CarSeeder::class);
    }
}
