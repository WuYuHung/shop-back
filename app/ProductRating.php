<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductRating extends Model
{
    //
    protected $fillable =[
        'id',
        'user_id',
        'product_id',
        'rating',
        'description',
        'created_at',
        'is_buy',
    ];
}
