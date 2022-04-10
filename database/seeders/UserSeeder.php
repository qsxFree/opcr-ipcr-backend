<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('user')->insert([
            'username' => 'head-user',
            'level' => 2,
            'password' => Hash::make('head'),
        ]);

        DB::table('user')->insert([
            'username' => 'general-user',
            'level' => 3,
            'password' => Hash::make('general'),
        ]);
    }
}
