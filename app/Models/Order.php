<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'comment',
        'delivery_method_id',
        'payment_type_id',
        'sum',
        'products',
        'address',
    ];

    protected $casts = [
        'products' => 'array',
        'address' => 'array',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function address()
    {
        return $this->hasMany(UserAddress::class);
    }

    public function PaymentType()
    {
        return $this->belongsTo(PaymentType::class);
    }

    public function DeliveryMethod()
    {
        return $this->belongsTo(DeliveryMethod::class);
    }
}
