<?php

namespace App\Models\Auth\traits;
use App\Models\Department\Department;

trait DoctorRelationship{

            public function Department()
        {
            return $this->belongsTo(Department::class, 'department_id');
        }
    }
}