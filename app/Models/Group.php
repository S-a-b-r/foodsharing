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
        return $this->belongsToMany(User::class, 'group_volunteers',  'group_id','volunteer_id');
    }
    public function wards(){
        return $this->belongsToMany(User::class, 'group_wards',  'group_id','ward_id');
    }
    public function sellers(){
        return $this->belongsToMany(User::class, 'group_sellers',  'group_id','seller_id');
    }
}
