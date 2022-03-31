<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder {

    public function run() {
        DB::table('employee_profile')->insert([
            [
                'user' => null,
                'role' => 1,
                'first_name' => 'Raymond',
                'middle_name' => 'Q',
                'last_name' => 'Zaratar',
                'extension_name' => null,
                'office' => 11
            ],
            [
                'user' => null,
                'role' => 2,
                'first_name' => 'Jerry',
                'middle_name' => null,
                'last_name' => 'Sainz',
                'extension_name' => null,
                'office' => 11
            ],
            [
                'user' => null,
                'role' => 3,
                'first_name' => 'Vian Jerome',
                'middle_name' => 'I',
                'last_name' => 'Rayos',
                'extension_name' => null,
                'office' => 11
            ],
            [
                'user' => null,
                'role' => 3,
                'first_name' => 'Cedric Anthony',
                'middle_name' => null,
                'last_name' => 'Morales',
                'extension_name' => null,
                'office' => 11
            ],
            [
                'user' => null,
                'role' => 3,
                'first_name' => 'Jaime',
                'middle_name' => null,
                'last_name' => 'Pardo',
                'extension_name' => null,
                'office' => 11
            ],
        ]);
    }
}
