<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(User $user)
    {
        $roles = Role::all();
        return view('admin.users.create', compact('user','roles'));
    }
}
