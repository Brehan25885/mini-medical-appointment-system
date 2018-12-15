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
     * @return Schedule
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




     /**
     * @param Schedule  $id
     * @param array $data
     *
     * @return Schedule
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     */

    public function update(array $data,$id)
    {
        $schedule= Schedule::find($id);

        return DB::transaction(function () use ($data,$schedule) {

            if ($schedule->update([
                'description'     => $data['description'],
                'day'             => $data['day'],
                'from'            => $data['from'],
                'to'              => $data['to'],
                'doctor_id'       => auth('doctor')->user()->id
            ])) {


                return $schedule;
            }

            throw new GeneralException(__('An Error Occurd'));
        });
    }

    /**
     * @param Schedule $id
     *
     */

     public function delete($id){

        $schedule=Schedule::find($id);
        if($schedule){
            $schedule->delete();
        }
     }


}
