<?php

namespace App\Http\Controllers\Admin\Group;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Group;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(Group $group)
    {
        return view('admin.groups.create', compact('group'));
    }
}
