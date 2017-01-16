<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
            'firstname' => 'admin',
            'lastname' => 'admin',
            'username' => 'admin',
            'password' => 'test',
            'admin' => '1',
            'project_manager' => '1',
        ]);
    }
}
