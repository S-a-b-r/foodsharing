<?php

namespace App\Http\Controllers\Seller\Delivery;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use App\Models\User;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Delivery $delivery)
    {
        return view('seller.deliveries.show', compact('delivery'));
    }
}
