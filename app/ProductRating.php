<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductRating extends Model
{
    protected  $table = 'product_ratings';
    public $timestamps = false; // disable all behaviour
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

    public function user(){
        return $this->belongsTo(Order::class);
    }

    public function product(){
        return $this->hasOne(Product::class);
    }
}
