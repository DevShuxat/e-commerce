<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @method static find($id)
 */
class Stock extends Model
{
    use HasFactory;


    protected $fillable = ['product_id', 'attributes', 'quantity'];


    protected $casts = [
        'attributes' => 'array',
    ];
//    public $translatable = [
//        'attributes'
//
//    ];


    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);

    }
}
