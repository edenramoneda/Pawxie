<?php

use Illuminate\Database\Seeder;

class LabTestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
                DB::table('tbl_lab_tests')->insert([
                    'lab_tests' => "Blood Glucose",
                    'description' => 'Lorem Ipsum',
                ]);
                DB::table('tbl_lab_tests')->insert([
                    'lab_tests' => "Albumin",
                    'description' => 'Lorem Ipsum',
                ]);
                DB::table('tbl_lab_tests')->insert([
                    'lab_tests' => "LIPASE",
                    'description' => 'Lorem Ipsum',
                ]);
                DB::table('tbl_lab_tests')->insert([
                    'lab_tests' => "FECAL EXAMINATION(FLOATATION)",
                    'description' => 'Lorem Ipsum',
                ]);
        }
    }
}
