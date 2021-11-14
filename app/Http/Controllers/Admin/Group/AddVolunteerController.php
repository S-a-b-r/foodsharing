<?php

namespace App\Http\Controllers\Admin\Group;

use App\Http\Controllers\Controller;
use App\Models\GroupVolunteer;
use App\Models\Role;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;

class AddVolunteerController extends Controller
{
    public function __invoke(Group $group, Request $req)
    {
        $data['volunteer_id'] = $req->input('volunteer_id');
        $data['group_id'] = $group->id;
        GroupVolunteer::firstOrCreate($data);
        return redirect()->route('admin.groups.index');
    }
}
