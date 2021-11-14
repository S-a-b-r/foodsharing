<?php

namespace App\Http\Controllers\Admin\Delivery;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use App\Models\DeliveryAct;
use App\Models\Role;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $curators = User::where('role_id',3)->get();
        $volunteers = User::where('role_id',4)->get();
        $wards = User::where('role_id',5)->get();
        $shops = Shop::all();
        $acts = DeliveryAct::all();

        return view('admin.deliveries.create', compact('curators', 'volunteers', 'wards', 'shops', 'acts'));
    }
}
