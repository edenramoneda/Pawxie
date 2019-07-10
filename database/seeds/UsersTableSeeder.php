<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_users')->insert([
            'username' => "Eden Ramoneda",
            'email' => 'edenlee@gmail.com',
            'password' => bcrypt('edenramoneda'),
            'remember_token' => str_random(10),
        ]);
    }
}
