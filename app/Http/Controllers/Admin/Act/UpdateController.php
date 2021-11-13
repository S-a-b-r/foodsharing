<?php

namespace App\Http\Controllers\Admin\Act;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\DeliveryAct;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(DeliveryAct $act, UpdateRequest $req)
    {
        $data = $req->validated();

        return redirect()->route('admin.acts.index');
    }
}
