<?php

namespace App\Http\Controllers\Admin\Shop;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Shop $shop)
    {
        return view('admin.shops.show', compact('shop'));
    }
}
