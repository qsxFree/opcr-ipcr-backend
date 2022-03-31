<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeRoleSeeder extends Seeder {

    public function run() {
        DB::table('employee_role')->insert([
            ['role' => "MIS Head"],
            ['role' => "Network Engineer",],
            ['role' => "Computer Programmer",],
        ]);
    }
}
