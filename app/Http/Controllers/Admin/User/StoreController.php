<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Models\User;
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

            User::firstOrCreate(['email'=>$data['email']], $data);
            DB::commit();
        } catch (\Exception $exception){
            DB::rollBack();
            abort(500);
        }
        return redirect()->route('admin.users.index');
    }
}
