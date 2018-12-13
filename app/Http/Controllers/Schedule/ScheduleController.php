<?php

namespace App\Http\Controllers\Schedule;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Schedule\Schedule;
use App\Http\Requests\StoreScheduleRequest;
use App\Repositories\Schedule\ScheduleRepository;
class ScheduleController extends Controller
{

    protected $scheduleRepo;


    public function __construct (ScheduleRepository $scheduleRepo){
        $this->scheduleRepo=$scheduleRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks=Schedule::all();
        return view ('doctors.schedule.calendar',compact('tasks'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listView()
    {
        $tasks=Schedule::all();
        return view ('doctors.schedule.list',compact('tasks'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('doctors.schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreScheduleRequest $request)
    {
        $schedule =$this->scheduleRepo->create($request->all());

        return redirect()->route('schedule.index')->withFlashSuccess('data was set successfully');
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
        $task=Schedule::find($id);
        return view('doctors.schedule.list',compact('task'));

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
}
