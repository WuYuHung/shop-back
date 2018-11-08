<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected  $fillable =[
        'id',
        'email',
        'password',
        'name',
        'address',
        'phone',
        'birthdate',
        'permission',
        'created_at',
        'updated_at',
        'photo_path',
        'active'
    ];
}
