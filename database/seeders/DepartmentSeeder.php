<?php

namespace Database\Seeders;
use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    /*  $department = new Department();
        $department->name = 'Software';
        $department->save();

        $department2 = new Department();
        $department2->name = 'Marketing';
        $department2->save();

        $department3 = new Department();
        $department3->name = 'Finance';
        $department3->save(); */

        Department::factory(10)->create();
    }
}
