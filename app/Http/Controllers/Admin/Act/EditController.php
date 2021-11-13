<?php

namespace App\Http\Controllers\Admin\Act;

use App\Http\Controllers\Controller;
use App\Models\DeliveryAct;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(DeliveryAct $act)
    {
        $roles = Role::all();
        return view('admin.acts.edit', compact('user','roles'));
    }
}
