<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('departments')->insert([
            ['department_name' => 'Account Management'],
            ['department_name' => 'Creative'],
            ['department_name' => 'Production'],
            ['department_name' => 'Studio'],
            ['department_name' => 'Finance'],
        ]);
    }
}
