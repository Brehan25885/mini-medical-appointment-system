<?php

namespace App\Models\Schedule;

use Illuminate\Database\Eloquent\Model;
use App\Models\Schedule\traits\ScheduleRelationship;
use App\Models\Schedule\traits\ScheduleAttribute;

class Schedule extends Model
{
    use ScheduleRelationship,ScheduleAttribute;

    protected $guarded = [];

    // protected $dates = ['day'];


}
