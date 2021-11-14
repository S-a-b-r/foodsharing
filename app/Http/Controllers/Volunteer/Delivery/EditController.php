<?php

namespace App\Http\Controllers\Volunteer\Delivery;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Delivery $delivery)
    {
        $roles = Role::all();
        return view('admin.deliveries.edit', compact('delivery','roles'));
    }
}
