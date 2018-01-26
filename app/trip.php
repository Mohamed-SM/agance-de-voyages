<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trip extends Model
{
    protected $fillable = [
        'title', 'description','price','places','start_at','end_at'
    ];
}
