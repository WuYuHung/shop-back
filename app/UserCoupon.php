<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCoupon extends Model
{
    protected  $table = 'user_coupons';
    public $timestamps = false; // disable all behaviour
    //
    protected $fillable = [
        'id',
        'user_id',
        'coupon_id',
        'is_used'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function coupon(){
        return $this->hasOne(Coupon::class);
    }
}
