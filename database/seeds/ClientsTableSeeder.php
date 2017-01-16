<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('clients')->insert([
            ['clientname' => 'ACME, Inc.'],
            ['clientname' => 'Widgets, Inc.']
        ]);
    }
}
