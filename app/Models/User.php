<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'second_name',
        'personal_data'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRoleAttribute(){
        switch ($this->role_id){
            case 1: return 'admin'; break;
            case 2: return 'moderator'; break;
            case 3: return 'curator'; break;
            case 4: return 'volunteer'; break;
            case 5: return 'ward'; break;
            case 6: return 'seller'; break;
        }
    }

    public function getVolunteerGroup(){
        return $this->belongsToMany(Group::class, 'group_volunteers',  'volunteer_id','group_id');
    }
}
