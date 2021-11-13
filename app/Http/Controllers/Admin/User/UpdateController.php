<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(User $user, UpdateRequest $req)
    {
        $data = $req->validated();
        $user->update($data);
        return redirect()->route('admin.users.index');
    }
}
