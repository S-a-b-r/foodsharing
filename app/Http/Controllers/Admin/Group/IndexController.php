<?php

namespace App\Http\Controllers\Admin\Group;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\GroupVolunteer;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $groups = Group::all();
        return view('admin.groups.index', compact('groups'));
    }
}
