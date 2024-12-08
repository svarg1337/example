<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{
    // Как передать в метод контроллера полиморфную свзязь (тип, к какой сущности этот коммент принадлежит)?

    protected $guarded = [];

    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }
}
