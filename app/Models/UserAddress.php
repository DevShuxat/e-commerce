<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'latitude',
        'latitude',
        'longitude',
        'region',
        'district',
        'street',
        'home',
    ];


    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
