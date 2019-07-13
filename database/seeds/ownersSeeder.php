<?php

use Illuminate\Database\Seeder;

class ownersSeeder extends Seeder
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
            DB::table('tbl_owners')->insert([
                'fullname' => $faker->name,
                'address' => $faker->address,
                'occupation' => $faker->jobTitle,
                'contact_number' => $faker->phoneNumber
            ]);
          }
    }
}
