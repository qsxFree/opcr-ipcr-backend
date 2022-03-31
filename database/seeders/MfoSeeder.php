<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MfoSeeder extends Seeder {

    public function run() {
        DB::table('mfo')->insert([
            [
                'code' => 'MFO1',
                'name' => 'Smart Campus',
                'description' => null,
            ],
            [
                'code' => 'MFO2',
                'name' => 'PRIME HRM Level III',
                'description' => null,
            ],
            [
                'code' => 'MFO3',
                'name' => 'PRIME HRM Level III',
                'description' => null,
            ],
            [
                'code' => 'MFO4',
                'name' => 'Request for MIS Services',
                'description' => null,
            ],
            [
                'code' => 'MFO5',
                'name' => 'Preventive Maintenance Activities',
                'description' => null,
            ],
            [
                'code' => 'MFO6',
                'name' => 'Software and System Development',
                'description' => null,
            ],
            [
                'code' => 'MFO7',
                'name' => 'Software and System Development',
                'description' => null,
            ],
            [
                'code' => 'MFO8',
                'name' => 'Information Systems and Maintenance and Security',
                'description' => null,
            ],
            [
                'code' => 'MFO9',
                'name' => 'Online Meetings and Live Streaming',
                'description' => null,
            ],
            [
                'code' => 'MF10',
                'name' => 'Inspection Committee Membership',
                'description' => null,
            ],
            [
                'code' => 'MF11',
                'name' => 'BAC Membership',
                'description' => null,
            ],
        ]);
    }
}
