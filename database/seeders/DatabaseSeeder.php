<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    public function run() {
        $this->call([
            LevelSeeder::class,
            UserSeeder::class,
            OfficeSeeder::class,
            EmployeeRoleSeeder::class,
            EmployeeSeeder::class,
            MfoSeeder::class,
            OfficeParentRlSeeder::class,
        ]);
    }
}
