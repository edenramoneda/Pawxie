<?php

use Illuminate\Database\Seeder;

class VeterinarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) {
            DB::table('tbl_veterinary')->insert([
                'firstname' => $faker->firstName,
                'middlename' => $faker->lastName,
                'lastname' => $faker->lastName,
                'birthday' => '1990-12-01',
                'date_hired' => '2019-01-02'
            ]);
          }
    }
}
