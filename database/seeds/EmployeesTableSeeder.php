<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('employees')->insert([
            ['firstname' => 'Bill', 'lastname' => 'Smith', 'hire_date' => '1900-01-01', 'termination_date' => null],
            ['firstname' => 'Bob', 'lastname' => 'Jones', 'hire_date' => '1900-01-01', 'termination_date' => null],
            ['firstname' => 'Jennier', 'lastname' => 'Jones', 'hire_date' => '1900-01-01', 'termination_date' => null],
            ['firstname' => 'Phil','lastname' => 'Wilson','hire_date' => '1900-01-01','termination_date' => null],
            ['firstname' => 'James','lastname' => 'McClure','hire_date' => '1900-01-01','termination_date' => null],
            ['firstname' => 'Ben','lastname' => 'Hinckley','hire_date' => '1900-01-01','termination_date' => null],
            ['firstname' => 'Hillary','lastname' => 'Phillips','hire_date' => '1900-01-01','termination_date' => null],
            ['firstname' => 'Don','lastname' => 'Street','hire_date' => '1900-01-01','termination_date' => null],
            ['firstname' => 'Brian','lastname' => 'Richards','hire_date' => '1900-01-01','termination_date' => null],
            ['firstname' => 'Shelley','lastname' => 'Sheehan','hire_date' => '1900-01-01','termination_date' => null],
        ]);
    }
}
