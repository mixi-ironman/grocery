<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'value',
        'expery_date',
        'usage_count',
        'usage_limit'
    ];

    // migrate:rollback --step=1.
    public function canBeUsed()
    {
        // Kiểm tra nếu usage_limit là null hoặc usage_count < usage_limit, trả về true
        return $this->usage_limit === null || $this->usage_count < $this->usage_limit;
    }
}
