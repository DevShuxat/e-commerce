<?php

namespace App\Models;

use App\Enums\SettingType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @method static create(array $array)
 */
class Setting extends Model
{
    use HasFactory, HasTranslations;



    protected  $guarded = [];


    public array $translatable = ['name'];



    public function values()
    {
        return $this->morphMany(Value::class, 'valueable');
    }
    public function getSettingType($value)
    {
        return new SettingType($value);
    }
}
