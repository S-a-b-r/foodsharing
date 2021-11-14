<?php

namespace App\Http\Controllers\Volunteer\Act;

use App\Http\Controllers\Controller;
use App\Models\DeliveryAct;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $acts = DeliveryAct::all();
        return view('admin.acts.index', compact('acts'));
    }
}
