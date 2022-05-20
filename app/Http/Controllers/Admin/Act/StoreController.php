<?php

namespace App\Http\Controllers\Admin\Act;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Act\StoreRequest;
use App\Models\Act;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $req)
    {
        $data = $req->validated();
        try{
            if(isset($data['act_img'])){
                DB::beginTransaction();

                $data['act_img'] = Storage::disk('public')->put('/images', $data['act_img']);

                Act::firstOrCreate($data);

                DB::commit();
            }
            Act::firstOrCreate($data);
            return redirect()->route('admin.acts.index');

        } catch (\Exception $exception){
            abort(500);
        }

        return redirect()->route('admin.acts.index');
    }
}
