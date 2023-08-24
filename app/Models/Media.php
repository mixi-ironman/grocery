<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Media extends Model
{
    use HasFactory;
     protected $fillable = [
        'title',
        'url',
        'type',
        'mediable_type',
        'mediable_id',
    ];

    public function mediable(): MorphTo
    {
        return $this->morphTo();  
    }
}
