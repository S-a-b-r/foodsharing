<?php

namespace App\Http\Controllers\Admin\Act;

use App\Http\Controllers\Controller;
use App\Models\Act;
use App\Models\User;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Act $act)
    {
        return view('admin.acts.show', compact('act'));
    }
}
