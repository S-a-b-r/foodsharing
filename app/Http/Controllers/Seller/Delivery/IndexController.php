<?php

namespace App\Http\Controllers\Seller\Delivery;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use App\Models\Group;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $deliveries = Delivery::where('ward_id',auth()->user()->id)->get();
        return view('seller.deliveries.index', compact('deliveries'));
    }
}
