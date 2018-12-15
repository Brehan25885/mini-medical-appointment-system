<?php

namespace App\Models\Appointment;

use Illuminate\Database\Eloquent\Model;
use App\Models\Appointment\traits\AppointmentRelationship;
use App\Models\Appointment\traits\AppointmentAttribute;


class Appointment extends Model
{
    use AppointmentRelationship, AppointmentAttribute;

    protected $guarded = [];

    // protected $dates = ['date'];


}
