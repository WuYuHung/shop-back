<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected  $table = 'events';
    public $timestamps = false; // disable all behaviour
    //
    protected $fillable =[
        'id',
        'start_date',
        'end_date',
        'description',
        'photo_path'
    ];
}
