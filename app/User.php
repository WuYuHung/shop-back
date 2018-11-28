<?php



namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject

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

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        // TODO: Implement getJWTIdentifier() method.
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        // TODO: Implement getJWTCustomClaims() method.
        return [];
    }
}
