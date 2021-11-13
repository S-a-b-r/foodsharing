<?php

namespace App\Http\Controllers\Admin\Shop;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $shops = Shop::all();
        return view('admin.shops.index', compact('shops'));
    }
}
