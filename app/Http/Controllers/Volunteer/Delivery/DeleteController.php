<?php

namespace App\Http\Controllers\Volunteer\Delivery;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Delivery $delivery)
    {
        $delivery->delete();
        return redirect()->route('admin.deliveries.index');
    }
}
