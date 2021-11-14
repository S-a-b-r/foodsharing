<?php

namespace App\Http\Controllers\Admin\Group;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Group;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $curators = User::where('role_id','3')->get();
        $shops = Shop::all();
        return view('admin.groups.create',compact('curators','shops'));
    }
}
