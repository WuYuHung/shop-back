<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginActivity extends Model
{
    //
    protected $fillable = [
        'id',
        'user_id',
        'login_time'
    ];
}
