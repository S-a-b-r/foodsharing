<?php

namespace App\Http\Controllers\Admin\Act;

use App\Http\Controllers\Controller;
use App\Models\DeliveryAct;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(DeliveryAct $act)
    {
        $act->delete();
        return redirect()->route('admin.acts.index');
    }
}
