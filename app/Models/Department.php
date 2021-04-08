<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Department extends Model
{
    use HasFactory;

    // One to Many
    public function employees() {
       // $employees = Employee::where('department_id', $this->id)->get();
       // return $employees;

       return $this->hasMany(Employee::class);
    }


}
