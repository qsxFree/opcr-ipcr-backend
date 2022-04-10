<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LevelSeeder extends Seeder {

    public function run() {
        DB::table('level')->insert([
            [
                'name' => "Administrator",
                'access' => '*',
                'description' => "Admin access",
            ],
            [
                'name' => "Head",
                'access' => '*',
                'description' => "Head access",
            ],
            [
                'name' => "General",
                'access' => '*',
                'description' => "General access",
            ]
        ]);
    }
}
