<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficeParentRlSeeder extends Seeder {

    public function run() {
        DB::table('office_parent_rl')->insert([
            ["child" => 2, "parent" => 1],
            ["child" => 3, "parent" => 1],
            ["child" => 4, "parent" => 1],
            ["child" => 5, "parent" => 1],
            ["child" => 6, "parent" => 1],
            ["child" => 7, "parent" => 1],
            ["child" => 8, "parent" => 1],
            ["child" => 9, "parent" => 1],
            ["child" => 10, "parent" => 1],
            ["child" => 11, "parent" => 1],
            ["child" => 12, "parent" => 1],
            ["child" => 13, "parent" => 1],
            ["child" => 14, "parent" => 13],
            ["child" => 15, "parent" => 13],
            ["child" => 16, "parent" => 13],
            ["child" => 17, "parent" => 13],
            ["child" => 18, "parent" => 13],
            ["child" => 19, "parent" => 13],
            ["child" => 20, "parent" => 13],
            ["child" => 21, "parent" => 13],
            ["child" => 22, "parent" => 13],
            ["child" => 23, "parent" => 13],
            ["child" => 24, "parent" => 1],
            ["child" => 25, "parent" => 24],
            ["child" => 26, "parent" => 24],
            ["child" => 27, "parent" => 24],
            ["child" => 28, "parent" => 24],
            ["child" => 29, "parent" => 24],
            ["child" => 30, "parent" => 24],
            ["child" => 31, "parent" => 24],
            ["child" => 32, "parent" => 1],
            ["child" => 33, "parent" => 32],
            ["child" => 34, "parent" => 32],
            ["child" => 35, "parent" => 32],
            ["child" => 36, "parent" => 32],
            ["child" => 37, "parent" => 32],
            ["child" => 38, "parent" => 32],
            ["child" => 39, "parent" => 32],
            ["child" => 40, "parent" => 32],
            ["child" => 41, "parent" => 32],
            ["child" => 42, "parent" => 32],
            ["child" => 43, "parent" => 32],
            ["child" => 44, "parent" => 32],
            ["child" => 45, "parent" => 32],
            ["child" => 46, "parent" => 32],
            ["child" => 47, "parent" => 32],
            ["child" => 48, "parent" => 32],
            ["child" => 49, "parent" => 32],
            // ["child" => 50, "parent" => 32],
        ]);
    }
}
