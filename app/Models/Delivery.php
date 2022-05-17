<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Delivery extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'deliveries';
    protected $guarded = false;

    public function products(){
        return $this->belongsToMany(Product::class, 'delivery_products',  'delivery_id','product_id');
    }

    public function getAct(){
        return $this->hasOne(Act::class, 'id', 'act_id');
    }

}
