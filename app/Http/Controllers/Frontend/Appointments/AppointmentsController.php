<?php

namespace App\Http\Controllers\Frontend\Appointments;

use Illuminate\Http\Request;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Controllers\Controller;
use App\Models\Appointment\Appointment;
use App\Models\Auth\Doctor;

use App\Models\Schedule\Schedule;
use Illuminate\Support\Facades\Mail;
use App\Mail\appointmentCreated;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAppointmentRequest $request)
    {
        $appointment=Appointment::create([
                            'name'          => $request->name,
                            'date'          => $request->date,
                            'time'          => $request->time,
                            'doctor_id'     => $request->doctor_id,
                            'patient_id'    => auth('patient')->user()->id
        ]);
        if($appointment){
            $doctor=Doctor::find($request->doctor_id);
            $data=[
                'appointment'   => $request->all(),
                'doctor'        =>$doctor
            ];
            Mail::to(auth('patient')->user()->email)->send(new appointmentCreated($data));

            return redirect()->back()->withFlashSuccess('Appointment is created successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function getScheduleTime($day)
    {
        $days=Schedule::where('day',$day)->pluck('from');

        return $days;
    }


}
