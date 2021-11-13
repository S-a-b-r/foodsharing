<?php

namespace App\Http\Controllers\Admin\Delivery;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Delivery\StoreRequest;
use App\Models\Delivery;
use App\Models\DeliveryAct;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $req)
    {
        $data = $req->validated();
        try{
            DB::beginTransaction();
            $data['acceptance_act_id'] = 1;
            $data['delivery_act_id'] = 2;
            Delivery::firstOrCreate($data);
            DB::commit();
        } catch (\Exception $exception){
            DB::rollBack();
            abort(500);
        }


        return redirect()->route('admin.deliveries.index');
    }
}
