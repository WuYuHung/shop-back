<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected  $table = 'coupons';
    public $timestamps = false; // disable all behaviour
    //
    protected $fillable =[
        'id',
        'code',
        'description',
        'created_at',
        'updated_at'
    ];

    public function order(){
        return $this->hasOne(Order::class);
    }
}
