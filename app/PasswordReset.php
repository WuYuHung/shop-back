<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    //
    protected $fillable = [
        'id',
        'user_id',
        'token',
        'reset_time'
    ];
}
