<?php

namespace App\Http\Controllers\Volunteer\Delivery;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Delivery\StoreRequest;
use App\Models\Delivery;
use App\Models\DeliveryAct;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ConfirmController extends Controller
{
    public function __invoke(Delivery $delivery)
    {
        $delivery->setAttribute('signature_volunteer','1');
        $delivery->update();

        return redirect()->route('volunteer.deliveries.index');
    }
}
