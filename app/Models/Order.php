<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

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
        'order_code',
        // 'order_date',
        'user_id',
        'order_destroy'
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    //Mutator
    // Accessor có tên dạng get[TenThuocTinh]Attribute, còn Mutator có tên dạng set[TenThuocTinh]Attribute.
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }
}
