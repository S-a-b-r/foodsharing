<?php

namespace App\Http\Controllers\Volunteer\Delivery;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $deliveries = Delivery::where('volunteer_id',auth()->user()->id)->get();
        return view('volunteer.deliveries.index', compact('deliveries'));
    }
}
