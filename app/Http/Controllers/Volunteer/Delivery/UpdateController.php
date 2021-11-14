<?php

namespace App\Http\Controllers\Volunteer\Delivery;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\Delivery;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Delivery $delivery, UpdateRequest $req)
    {
        $data = $req->validated();
        $delivery->update($data);
        return redirect()->route('admin.deliveries.index');
    }
}
