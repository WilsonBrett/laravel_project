<?php

use Illuminate\Database\Seeder;

class TitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('titles')->insert([
            ['department_id' => 1, 'title' => 'Account Executive', 'billing_rate' => 85],
            ['department_id' => 1, 'title' => 'Client Strategist', 'billing_rate' => 150],
            ['department_id' => 2, 'title' => 'Art Director', 'billing_rate' => 100],
            ['department_id' => 2, 'title' => 'Copy Writer', 'billing_rate' => 100],
            ['department_id' => 2, 'title' => 'Creative Director', 'billing_rate' => 85],
            ['department_id' => 3, 'title' => 'Producer', 'billing_rate' => 100],
            ['department_id' => 3, 'title' => 'Senior Producer', 'billing_rate' => 150],
            ['department_id' => 4, 'title' => 'Production Designer', 'billing_rate' => 90],
            ['department_id' => 4, 'title' => 'Senior Production Designer', 'billing_rate' => 140],
            ['department_id' => 5, 'title' => 'Chief Financial Officer', 'billing_rate' => 0],
            ['department_id' => 5, 'title' => 'Analyst, Client Finance', 'billing_rate' => 0]
        ]);
    }
}
