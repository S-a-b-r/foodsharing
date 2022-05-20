<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'groups';
    protected $guarded = false;

    public function volunteers(){
        return $this->hasMany(User::class)->where('role_id','=','4');
    }
    public function wards(){
        return $this->hasMany(User::class)->where('role_id','=','5');
    }
    public function sellers(){
        return $this->hasMany(User::class)->where('role_id','=','6');
    }
    public function shop(){
        return $this->belongsTo(Shop::class);
    }
}
