<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id', 'trip_id','places','status','payment_information'
    ];

    public function trip()
    {
        return $this->belongsTo('App\Trip');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
