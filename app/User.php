<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected  $table = 'users';
    //
    protected  $fillable = [
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

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function user_coupon(){
        return $this->hasMany(UserCoupon::class);
    }

    public function wishlists(){
        return $this->belongsToMany(Product::class,'wishlists','user_id','product_id');
    }

    public function product_ratings() {
        return $this->hasMany(ProductRating::class);
    }

    public function password_resets(){
        return $this->hasMany(PasswordReset::class);
    }

    public function login_activities(){
        return $this->hasMany(LoginActivity::class);
    }
}
