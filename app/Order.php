<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable =[
        'id',
        'user_id',
        'coupons_id',
        'amount',
        'first_name',
        'last_name',
        'company_name',
        'address',
        'email',
        'phone',
        'created_at',
        'updated_at',
        'status',
    ];
}
