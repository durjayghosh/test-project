<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $table = 'product_categories';

    public function products(){
        return $this->hasMany(Product::Class, 'category_id', 'id')->with('galleries')->with('howdoesitswork');
    }

    public function galleries(){
        return $this->hasMany(ProductGallery::Class, 'product_id', 'id');
    }

    public function images(){
        return $this->hasOne(ProductGallery::Class, 'product_id', 'id');
    }

}
