<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'content',
        'rating',
        'email',
        'commentable_type',
        'commentable_id',
    ];

    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }
}

    
