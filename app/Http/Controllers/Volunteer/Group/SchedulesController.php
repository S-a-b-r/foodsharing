<?php

namespace App\Http\Controllers\Volunteer\Group;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\GroupVolunteer;
use App\Models\Schedule;
use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    public function __invoke(Group $group)
    {
        $schedule = Schedule::where('group_id', $group);
        return view('admin.groups.schedules',compact('schedule'));
    }
}
