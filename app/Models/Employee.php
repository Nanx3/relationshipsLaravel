<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Computer;
use App\Models\Project;

class Employee extends Model
{
    use HasFactory;

    //Many to one
    public function department() {
        // $department = Department::where('employee_id', $this->id)->first();
        return $this->belongsTo(Department::class);
    }

    public function manager() {
        // model, model_id, id
        return $this->belongsTo(Employee::class, 'manager_id');
    }

    public function employees() {
        return $this->hasMany(Employee::class, 'manager_id');
    }

    //One to One
    public function computer() {
        return $this->hasOne(Computer::class);
    }

    //Many to Many
    public function projects() {
        return $this->belongsToMany(Project::class);
    }

}
