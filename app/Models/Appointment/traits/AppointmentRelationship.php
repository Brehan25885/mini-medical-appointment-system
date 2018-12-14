<?php

namespace App\Models\Appointment\traits;

use App\Models\Auth\Doctor;
use App\Models\Auth\Patient;

trait AppointmentRelationship{

    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctor_id');
    }

    public function patient(){
        return $this->belongsTo(Patient::class,'patient_id');
    }
}
