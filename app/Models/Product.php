<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'category_id',
        'price',
        'content',
        'old_price',
        'image',
        'is_active',
        'is_onsale',
        'is_featured',
        'stock',
        'product_sold',
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

    public function media(): MorphMany
    {
        return $this->morphMany(Media::class, 'mediable');
    }

    public function listComment(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable_type','commentable_id');
    }

    public function productTags()
    {
        return $this->hasMany(ProductTag::class, 'product_id','id');
    }
    //dùng quan hệ  belongsToMany nhiều khi có bảng trung gian vd nàY là bảng product_tags thay vì dùng cách trên productTags()
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tags', 'product_id', 'tag_id');
    }

    //lấy giá ưu dãi nếu có
    public function getCartPriceAttribute()
    {
        if ($this->sale_price) {
            return $this->sale_price;
        }

        return $this->price;
    }

}
