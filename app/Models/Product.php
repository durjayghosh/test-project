<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['product_name', 'slug', 'category_id', 'order_by', 'description'];

    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'product_id', 'id');
    }

    public function images()
    {
        return $this->hasOne(ProductGallery::class, 'product_id', 'id');
    }

    public function howdoesitswork()
    {
        return $this->hasMany(ProductWorkGallery::class, 'product_id', 'id');
    }

    public function categories()
    {
        return $this->hasOne(ProductCategory::class, 'id', 'category_id');
    }

}