<?php

namespace App\Http\Controllers\Volunteer\Delivery;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use App\Models\DeliveryAct;
use App\Models\DeliveryProducts;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __invoke(Delivery $delivery)
    {
        return view('volunteer.deliveries.product', compact('delivery'));
    }
}
