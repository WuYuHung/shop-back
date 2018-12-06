<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected  $table = 'categories';
    //
    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at',
        'photo_path',
        'is_deleted'
        ];

     public function products(){
         return $this->hasMany(Product::class);
     }
}
