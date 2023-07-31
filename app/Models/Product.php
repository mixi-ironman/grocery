<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'category_id',
        'price',
        'old_price',
        'image',
        'is_active',
        'stock',
    ];

    /*
    Lấy thông tin của một sản phẩm và danh mục mà nó thuộc về:
    $product = Product::find(1); // Lấy thông tin sản phẩm có `id` là 1
    $category = $product->category; // Lấy thông tin danh mục mà sản phẩm này thuộc về

    */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }

    
}
