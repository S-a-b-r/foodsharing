<?php

namespace App\Http\Controllers\Admin\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Shop\StoreRequest;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $req)
    {
        $data = $req->validated();
        try{
            DB::beginTransaction();
            $data['password'] = Hash::make($data['password']);
            $data['role_id'] = (int)$data['role_id'];

            Shop::firstOrCreate(['email'=>$data['email']], $data);
            DB::commit();
        } catch (\Exception $exception){
            DB::rollBack();
            abort(500);
        }


        return redirect()->route('admin.shops.index');
    }
}
