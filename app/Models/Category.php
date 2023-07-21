<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'parent_id',
        'is_active',
    ];

    //phương thức products() sẽ trả về một bộ sưu tập (collection) của các bản ghi Product liên quan đến bản ghi Category hiện tại.
    /*
    Lấy danh sách sản phẩm thuộc về một danh mục cụ thể (ví dụ: danh mục có id là 1):
    $category = Category::find(1);
    $products = $category->products; // Lấy danh sách các sản phẩm thuộc danh mục này

    */
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    /*
    Tạo một sản phẩm mới và liên kết nó với một danh mục cụ thể:
    $category = Category::find(1);
    $product = new Product([
        'name' => 'Sản phẩm mới',
        'price' => 100000,
        // Các thuộc tính khác của sản phẩm
    ]);

    $category->products()->save($product); // Lưu sản phẩm và thiết lập khóa ngoại category_id

    */
}
