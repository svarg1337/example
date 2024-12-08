<?php

namespace App\Models;

use App\Enum\Car\Status;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    //use SoftDeletes;
    //protected $fillable = ['brand_id', 'model', 'price', 'body_type', 'vin'];
    protected $guarded = [];

    protected $casts = [
        'status' => Status::class,
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    protected function canDelete(): Attribute
    {
        return Attribute::make(
            get: fn() => (($this->status === Status::DRAFT) || ($this->status === Status::CANCELED))
        );
    }

    public function scopeOfActive($query): void
    {
        $query->where('status', Status::ACTIVE);
    }
}
