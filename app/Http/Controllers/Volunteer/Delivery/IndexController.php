<?php

namespace App\Http\Controllers\Volunteer\Delivery;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $deliveries = Delivery::all();
        return view('admin.deliveries.index', compact('deliveries'));
    }
}
