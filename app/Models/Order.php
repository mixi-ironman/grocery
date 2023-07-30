<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'email',
        'phone',
        'total_amount',
        'shipping_address',
        'payment_method',
        'status',
        'order_note',
        // 'order_date',
    ];
}
