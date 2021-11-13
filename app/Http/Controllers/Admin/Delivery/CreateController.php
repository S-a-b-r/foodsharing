<?php

namespace App\Http\Controllers\Admin\Delivery;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use App\Models\DeliveryAct;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(Delivery $delivery)
    {
        $curators = User::where('role_id',3)->get();
        $volunteers = User::where('role_id',4)->get();
        $wards = User::where('role_id',5)->get();
        $shops = User::where('role_id',2)->get();
        $acts = DeliveryAct::all();

        return view('admin.deliveries.create', compact('delivery','curators', 'volunteers', 'wards', 'shops', 'acts'));
    }
}
