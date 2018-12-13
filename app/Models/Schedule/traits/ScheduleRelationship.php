<?php
namespace App\Models\Schedule\traits;

use App\Models\Auth\Doctor;

trait ScheduleRelationship{


        public function doctor()
        {
            return $this->belongsTo(Doctor::class, 'doctor_id');
        }

}
