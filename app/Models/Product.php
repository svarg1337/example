<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    //
    //use HasFactory;
    protected $fillable = ['title', 'description','price','in_stock','show_on_home'];

    public function images(){
        return $this->hasMany(ProductImage::class);
    }
    
}
