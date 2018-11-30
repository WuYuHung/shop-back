<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected  $table = 'products';
    //
    protected $fillable = [
        'id',
        'name',
        'category_id',
        'price',
        'description',
        'created_at',
        'updated_at',
        'photo_path',
        'is_deleted'
    ];

    public function categories(){
        return $this->belongsTo(Category::class);
    }

}
