<?php

namespace App\Http\Controllers\Admin\Act;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Acts\StoreRequest;
use App\Models\DeliveryAct;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $req)
    {
        $data = $req->validated();
        try{
            DB::beginTransaction();

            $data['act_img'] = Storage::disk('public')->put('/images', $data['act_img']);

            DeliveryAct::firstOrCreate($data);

            DB::commit();
        } catch (\Exception $exception){
            abort(500);
        }


        return redirect()->route('admin.acts.index');
    }
}
