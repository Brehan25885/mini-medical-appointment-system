<?php
namespace App\Repositories\Schedule;
use DB;
use App\Models\Schedule\Schedule;
use App\Repositories\BaseRepository;

class ScheduleRepository extends BaseRepository{

    /**
     * @return string
     */

    public function model()
    {
        return Schedule::class;
    }

     /**
     * @param array $data
     * @return User
     */

    public function create(array $data)
    {
        DB::transaction(function () use ($data) {

            $scheduleData = [
                'description'     => $data['description'],
                'day'             => $data['day'],
                'from'            => $data['from'],
                'to'              => $data['to'],
                'doctor_id'       => auth('doctor')->user()->id
            ];

            $schedule = schedule::create($scheduleData);



            return $schedule;
        });
    }

}
