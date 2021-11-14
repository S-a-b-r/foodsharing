<?php

namespace App\Http\Controllers\Volunteer\Group;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Group $group)
    {
        return view('admin.groups.show', compact('group'));
    }
}
