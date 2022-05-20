<?php

namespace App\Http\Controllers\Admin\Act;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Act\UpdateRequest;
use App\Models\Act;

class UpdateController extends Controller
{
    public function __invoke(Act $act, UpdateRequest $req)
    {
        $data = $req->validated();
        $act->update($data);

        return redirect()->route('admin.acts.index');
    }
}
