<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarPulse extends Model
{
    /**
     * fillable
     * 
     * @var array
     */
    protected $fillable = [
        'user_id',
        'b_front_left',
        'b_front_right',
        'b_back_left',
        'b_back_right',
        's_front_left',
        's_front_right',
        's_back_left',
        's_back_right',
        'bat_front_left',
        'bat_front_right',
        'bat_back_left',
        'bat_back_right',
        'latitude',
        'longitude',
        'speed',
        'satelite',
    ];
}
