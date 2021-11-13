<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeliveryAct extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'delivery_acts';
    protected $guarded = false;
}
