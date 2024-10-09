<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    use HasFactory;
    protected $table = 'gallery_category';
    protected $fillable = ['category', 'slug'];

    public function gallery(){
        return $this->hasOne(Gallery::class, 'category_id', 'id');
    }
}
