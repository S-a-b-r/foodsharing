<?php

namespace App\Http\Controllers\Admin\Group;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Group;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Group $group)
    {
        $roles = Role::all();
        return view('admin.groups.edit', compact('group','roles'));
    }
}
