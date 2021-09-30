<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'meno' => "Test",
            'priezvisko' => "Testovy",
            'email' => "test@ukf.sk",
            'heslo' => bcrypt('secret'),
            'vek' => 30,
        ]);
    }
}
