<?php

namespace App\Models\Auth\traits;
use App\Models\Department\Department;
use App\Models\Schedule\Schedule;
use App\Models\Appointment\Appointment;

trait PatientRelationship{


        public function appointments()
        {
            return $this->hasMany(Appointment::class);
        }

}
