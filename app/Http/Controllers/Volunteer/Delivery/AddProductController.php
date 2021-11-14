<?php

namespace App\Http\Controllers\Volunteer\Delivery;

use App\Http\Controllers\Controller;
use App\Http\Requests\Volunteer\Delivery\ProductRequest;
use App\Models\Delivery;
use App\Models\DeliveryProducts;
use App\Models\Product;

class AddProductController extends Controller
{
    public function __invoke(Delivery $delivery, ProductRequest $req)
    {
        $data = $req->validated();
        $product = Product::firstOrCreate($data);

        $data1['product_id'] = $product->id;
        $data1['delivery_id'] = $delivery->id;

        DeliveryProducts::create($data1);

        return redirect()->route('volunteer.deliveries.index');
    }
}
