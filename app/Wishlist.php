<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    //
    protected $fillable = [
      'id',
      'user_id',
      'product_id'
    ];
}
