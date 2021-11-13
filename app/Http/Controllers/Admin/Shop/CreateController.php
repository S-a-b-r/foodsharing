<?php

namespace App\Http\Controllers\Admin\Shop;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Shop;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(Shop $shop)
    {
        $roles = Role::all();
        return view('admin.shops.create', compact('shop','roles'));
    }
}
