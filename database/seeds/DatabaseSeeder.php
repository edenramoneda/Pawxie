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
         $this->call([ 
            UsersTableSeeder::class,
            LabTestsSeeder::class,
            ownersSeeder::class,
            VaccinationsSeeder::class,
            VeterinarySeeder::class
            ]);
    }
}
