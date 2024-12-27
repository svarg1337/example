<?php

namespace App\Models;

use App\Interface\ICommentable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Article extends Model implements ICommentable
{
    protected $fillable = ['title', 'body'];


    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
