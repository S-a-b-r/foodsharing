<?php

namespace App\Http\Controllers\Admin\Act;

use App\Http\Controllers\Controller;
use App\Models\DeliveryAct;
use App\Models\User;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(DeliveryAct $act)
    {
        return view('admin.acts.show', compact('act'));
    }
}
