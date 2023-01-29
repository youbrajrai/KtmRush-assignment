<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
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
        'name',
        'phone',
        'email',
        'password',
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
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }  
    public function cartProducts()
    {
        return $this->hasManyThrough(Product::class, Cart::class, 'user_id', 'id', 'id', 'product_id');
    }

    public function countCartItems(): Attribute 
    {
        return Attribute::get( function(){
            if($this->carts) {
                $num = 0;
                foreach($this->carts as $item) {
                    $num += $item['quantity'];
                }
                return $num;
            }
        });
    }

    public function cartSubTotal(): Attribute {
        return Attribute::get( function(){
            if($this->carts) {
                $subtotal = 0;
                foreach($this->carts as $item) {
                    $subtotal += $item['quantity'] * $item->product->getNetPrice;
                }
                return $subtotal;
            }
        });
    }

}
