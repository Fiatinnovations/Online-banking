<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    protected $fillable=[
        'status','description','user_id','amount'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
