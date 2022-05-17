<?php

namespace App\Http\Controllers\Admin\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Shop\UpdateRequest;
use App\Models\Shop;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Shop $shop, UpdateRequest $req)
    {
        $data = $req->validated();
        $shop->update($data);
        return redirect()->route('admin.shops.index');
    }
}
