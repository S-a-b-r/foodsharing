<?php

namespace App\Http\Controllers\Volunteer\Act;

use App\Http\Controllers\Controller;
use App\Models\DeliveryAct;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(DeliveryAct $act)
    {
        $shop_assistants = User::where('role_id',6)->get();
        $volunteers = User::where('role_id',4)->get();

        return view('admin.acts.create', compact('shop_assistants','volunteers'));
    }
}
