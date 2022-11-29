<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'email_verified',
        'mobile',
        'mobie_verified',
        'password',
        'billing_address',
        'shipping_address',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public  function orders(){

        return  $this->hasMany(Order::class);
    }
    public  function paymenets(){
        return  $this->hasMany(paymenets::class);
    }
    public  function shipments(){
        return  $this->hasMany(shipments::class);
    }
    public  function shippingAddress(){
        return  $this->hasOne(Address::class,'id','shipping_address');
    }
    public  function billinAddress(){
        return  $this->hasOne(Address::class,'id','billing_address');
    }
    public function wishList()
    {
        return $this->hasOne(wishList::class);
    }

    public function reviews()
    {
        return $this->hasMany(review::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
