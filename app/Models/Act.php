<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Act extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'acts';
    protected $guarded = false;

    public function delivery(){
        return $this->hasOne(Delivery::class,'act_id','id');
    }
}
