<?php

namespace App\Models\Auth\traits;
use App\Models\Department\Department;
use App\Models\Schedule\Schedule;
use App\Models\Appointment\Appointment;

trait DoctorRelationship{

            public function department()
        {
            return $this->belongsTo(Department::class, 'department_id');
        }

        public function schedule()
        {
            return $this->hasMany(Schedule::class);
        }

        public function appointments()
        {
            return $this->hasMany(Appointment::class);
        }

}
