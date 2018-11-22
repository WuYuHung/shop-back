<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected  $table = 'wishlists';
    public $timestamps = false; // disable all behaviour
    //
    protected $fillable = [
      'id',
      'user_id',
      'product_id'
    ];

}
