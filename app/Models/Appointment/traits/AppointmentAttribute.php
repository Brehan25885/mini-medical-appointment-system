<?php

namespace App\Models\Appointment\traits;

trait AppointmentAttribute
{



     /**
     * @return string
     */
    public function getConfirmButtonAttribute()
    {
        return '<a href="'.route('my-appointments.edit', $this).'" class="btn btn-primary">Confirm</a>';
    }

     /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        $confirm = '<div class="btn-group btn-group-sm" role="group" aria-label="Appointment Actions">
        '.$this->confirm_button.'
         </div>';

      return $confirm;
    }



}
