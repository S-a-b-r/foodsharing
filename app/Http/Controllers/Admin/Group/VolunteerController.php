<?php

namespace App\Http\Controllers\Admin\Group;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function __invoke(Group $group)
    {
        return view('admin.groups.volunteer', compact('group'));
    }
}
