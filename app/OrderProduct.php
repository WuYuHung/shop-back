<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected  $table = 'order_products';
    public $timestamps = false; // disable all behaviour
    //
    protected $fillable = [
        'id',
        'order_id',
        'product_id',
        'quantity'
    ];

    public function order() {
        return $this->belongsTo(Order::class);
    }

    public function product() {
        return $this->hasOne(Product::class);
    }
}
