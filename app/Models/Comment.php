<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{
    // Белый список моделей к которым может быть прикреплен Comment
    public const COMMENTABLE_MODELS = [Car::class, Article::class];

    protected $guarded = [];

    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }
}
