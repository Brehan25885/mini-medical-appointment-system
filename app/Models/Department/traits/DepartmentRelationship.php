<?php

namespace App\Models\Department\traits;
use App\Models\Auth\Doctor;

trait DepartmentRelationship{


    public function doctors(){

        $this->hasMany(Doctor::class);
    }
}
