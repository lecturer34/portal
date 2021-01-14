<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Venue;
use Illuminate\Http\Request;
use App\Models\Group;
use Carbon\Carbon;

class ScheduleController extends Controller
{
    public function index(Group $group)
    {
        $schedules = Schedule::where('group_id', $group->id)->get();
        return view('group.schedules', compact('schedules', 'group'));
    }


    public function create()
    {
        $schools = getSchools();
        return view('schedule.create', compact('schools'));
    }


    public function store(Request $request)
    {
        $stime = Carbon::createFromFormat("h:m a", $request->stime);
        $etime = Carbon::createFromFormat("h:m a", $request->etime);
        $group_id = session('group_id');

        $schedule = Schedule::create([
            "day"=>$request->day,
            "stime"=>$stime->toTimeString(),
            "etime"=>$etime->toTimeString(),
            "venue_id"=>$request->venue,
            "group_id"=>$group_id,
        ]);

        return redirect()->route('group.schedules', $group_id);
    }


    public function show(Schedule $schedule)
    {
        //
    }


    public function edit(Schedule $schedule)
    {
        //
    }


    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
