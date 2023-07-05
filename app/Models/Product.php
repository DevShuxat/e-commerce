<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\BelongsTo;
//use Illuminate\Database\Eloquent\Relations\BelongsToMany;
//use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;


class Product extends Model
{
    use HasFactory, HasTranslations, SoftDeletes;

    public array $translatable = ["name", "description"];
    protected $fillable = [
        "category_id",
        "name",
        "price",
        "description",
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function withStock($stockId)
    {
        $this->stocks = [$this->stocks()->findOrFail($stockId)];
        return $this;
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
