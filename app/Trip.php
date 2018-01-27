<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = [
        'title', 'description','price','places','start_at','end_at'
    ];

    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }

}
