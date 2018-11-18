<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    protected  $table = 'password_resets';
    //
    protected $fillable = [
        'id',
        'user_id',
        'token',
        'reset_time'
    ];

    public function user(){
        $this->belongsTo(User::class);
    }
}
