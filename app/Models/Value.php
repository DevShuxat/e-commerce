<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Value extends Model
{
    use HasFactory, HasTranslations;


    protected $fillable = ['value'];

    public $translatable = ['value'];

    protected $casts = [
        'value' => 'array'
    ];


    public function value() {
       return $this->hasMany(Attribute::class);
    }
}
