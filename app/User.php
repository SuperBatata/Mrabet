<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
class User extends Authenticatable
{


    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'lastname', 'email', 'password','name_id','cin','profile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function roles(){
        return $this->belongsToMany('App\Role');
    }
    public function hasAnyRoles($roles){
        if ($this->roles()->whereIn('name',$roles)->first()){
            return true;
        }
        return false;
    }

    public function hasRole($roles){
        if ($this->roles()->where('name',$roles)->first()){
            return true;
        }
        return false;
    }

    public function profile()
    {
        return $this->morphTo();
    }

    public function deleteChargeur()
    {
        DB::beginTransaction();
        {


            $this->profile()->first()->dissociateAll();
            $this->profile()->delete();
            $result = parent::delete();

            if (!$result)
            {
                throw new \RuntimeException('User deletion failed');
            }
            DB::commit();
            return $result;

        }
    }


}
