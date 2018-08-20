<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    protected $fillable=[

        'status', 'description', 'beneficiary_id', 'amount', 'new_balance'
    ];

    public function beneficiary(){

        return $this->belongsTo('App\Beneficiary');
    }

    public function user(){

        return $this->belongsTo('App\User');
    }


}
