<?php
// fuck
namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected  $table = 'orders';
    //
    protected $fillable =[
        'id',
        'user_id',
        'coupon_id',
        'amount',
        'first_name',
        'last_name',
        'company_name',
        'address',
        'email',
        'phone',
        'created_at',
        'updated_at',
        'status',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function coupon(){
        return $this->hasOne(Coupon::class);
    }
}
