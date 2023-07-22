<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'discount_amount',
        'is_active',
        // Thêm tên các trường khác nếu có
    ];
}
