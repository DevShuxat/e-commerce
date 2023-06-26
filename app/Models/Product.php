<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory, Searchable;


    protected $fillable = [
        "category_id",
        "name",
        "price",
        "description",
    ];

    protected $casts= [
      'name' => 'array'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function stocks()
    {
        return $this->hasOne(Stock::class)->latestOfMany();
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
