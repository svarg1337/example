<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $guarded = [];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
