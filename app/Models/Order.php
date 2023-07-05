<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static find($id)
 * @method static findOrFail($order_id)
 */
class Order extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'comment',
        'delivery_method_id',
        'payment_type_id',
        'sum',
        'status',
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
        return $this->belongsTo(Product::class);
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

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    public function category()
    {
        return $this->hasMany(Category::class);
    }

}
