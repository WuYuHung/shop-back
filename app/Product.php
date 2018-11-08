<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'id',
        'category_id',
        'price',
        'created_at',
        'updated_at',
        'photo_path'
    ];
}
