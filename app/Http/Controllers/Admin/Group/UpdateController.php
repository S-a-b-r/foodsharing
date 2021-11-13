<?php

namespace App\Http\Controllers\Admin\Group;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Group\UpdateRequest;
use App\Models\Group;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Group $group, UpdateRequest $req)
    {
        $data = $req->validated();
        $group->update($data);
        return redirect()->route('admin.groups.index');
    }
}
