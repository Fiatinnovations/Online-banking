<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'account_type'
        , 'photo_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function photo(){

        return $this->belongsTo('App\Photo');
    }


    public function beneficiaries(){

        return $this->hasMany('App\Beneficiary');
    }

    public function withdrawals(){

        return $this->hasMany('App\Withdrawal');
    }

    public function deposits(){
        return $this->hasMany('App\Deposit');
    }


}
