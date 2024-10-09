<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'review';
    protected $fillable = ['name', 'description', 'product_id', 'review_date', 'is_verified', 'home_page', 'rating', 'email'];
}