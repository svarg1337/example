<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Article extends Model
{
    protected $fillable = ['title', 'body'];


    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
