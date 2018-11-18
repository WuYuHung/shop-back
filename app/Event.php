<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected  $table = 'events';
    //
    protected $fillable =[
        'id',
        'start_date',
        'end_date',
        'description',
        'photo_path'
    ];
}
