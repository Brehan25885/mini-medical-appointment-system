<?php

namespace App\Models\Schedule\traits;

trait ScheduleAttribute
{



     /**
     * @return string
     */
    public function getDeletePermanentlyButtonAttribute()
    {
        return '<a href="/schedule/'.$this->id.'/delete" name="confirm_item" class="btn btn-danger"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="delete"></i></a> ';
    }

     /**
     * @return string
     */
    public function getEditButtonAttribute()
    {
        return '<a href="'.route('schedule.edit', $this).'" class="btn btn-primary"><i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="'.__('buttons.general.crud.edit').'"></i></a>';
    }



      /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {

        $edit = '<div class="btn-group btn-group-sm" role="group" aria-label="City Actions">
            '.$this->edit_button.'
          </div>';

        $delete = '
        <div class="btn-group btn-group-sm" role="group" aria-label="City Actions">
            '.$this->delete_permanently_button.'
        </div>';




        return $edit . ' '.$delete;

    }

}
