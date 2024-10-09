<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSetting extends Model
{
    use HasFactory;
    protected $table = 'page_setting';
    protected $fillable = ['heading_title', 'heading','product_id', 'description', 'link', 'image', ' title_image', 'page_id', 'sub_heading', 'youtube', 'instagram', 'twitter', 'facebook', 'location'];

}