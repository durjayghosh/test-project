<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationGallery extends Model
{
    use HasFactory;
    protected $table = 'location_gallery';
    protected $fillable = ['location', 'image', 'image_title'];
}
