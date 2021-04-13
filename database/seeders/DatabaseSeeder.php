<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\Employee;
use App\Models\Department;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
/*         $this->call(DepartmentSeeder::class);
        $this->call(EmployeeSeeder::class); */
        Department::factory(10)->create();
        Employee::factory(10)->create();

    }
}
