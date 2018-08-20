<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    protected $fillable=[

        'bank_id','account_number','account_name'
    ];

    public function bank(){

        return $this->belongsTo('App\Bank');
    }

    public function beneficiary(){

        return $this->belongsTo('App\User');
    }

    public function withdrawals(){

        return $this->belongsTo('App\Withdrawal');
    }
}
