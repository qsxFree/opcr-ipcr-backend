<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LevelSeeder extends Seeder {

    public function run() {
        DB::table('level')->insert([
            [
                'name' => "ADMIN",
                'access' => '*',
                'description' => "Admin access",
            ],
            [
                'name' => "HEAD",
                'access' => '*',
                'description' => "Head access",
            ],
            [
                'name' => "GENERAL",
                'access' => '*',
                'description' => "General access",
            ]
        ]);
    }
}
