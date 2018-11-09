<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    //
    protected $fillable =[
        'id',
        'code',
        'start_date',
        'end_date',
        'description',
    ];

    public function order(){
        return $this->hasOne(Order::class);
    }
}
