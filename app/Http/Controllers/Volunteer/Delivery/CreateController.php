<?php

namespace App\Http\Controllers\Volunteer\Delivery;

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
        $user = auth()->user();
        $group = $user->getVolunteerGroup[0];
        $curator_id = $group->curator_id;
        $volunteer_id = $user->id;
        $wards = $group->wards;
        $shop_id = $group->shop_id;
        $acts = DeliveryAct::all();

        return view('volunteer.deliveries.create', compact('delivery','curator_id', 'volunteer_id', 'wards', 'shop_id', 'acts'));
    }
}
