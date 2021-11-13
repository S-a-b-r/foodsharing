<?php

namespace App\Http\Controllers\Admin\Shop;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Shop $shop)
    {
        $shop->delete();
        return redirect()->route('admin.shops.index');
    }
}
