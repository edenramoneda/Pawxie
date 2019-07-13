<?php

use Illuminate\Database\Seeder;

class VaccinationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_vaccinations')->insert([
            'type_of_vaccination' => "Rabies",
            'vaccination' => 'Rabies Vaccination 3 years',
        ]);
        DB::table('tbl_vaccinations')->insert([
            'type_of_vaccination' => "FVRCP",
            'vaccination' => 'Feline Viral Rhinotracheitis',
        ]);
        DB::table('tbl_vaccinations')->insert([
            'type_of_vaccination' => "FVRCP",
            'vaccination' => 'Caliciviral Disease',
        ]);
        DB::table('tbl_vaccinations')->insert([
            'type_of_vaccination' => "FVRCP",
            'vaccination' => 'Panleukopenia',
        ]);
        DB::table('tbl_vaccinations')->insert([
            'type_of_vaccination' => "FELV",
            'vaccination' => 'Feline Leukemia Vaccination',
        ]);
        DB::table('tbl_vaccinations')->insert([
            'type_of_vaccination' => "HWP",
            'vaccination' => 'Heartworm Preventative',
        ]);
    }
}
