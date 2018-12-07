<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    protected  $table = 'subscribes';
    public $timestamps = false; // disable all behaviour
    //
    protected $fillable =[
      'email'
    ];
}
