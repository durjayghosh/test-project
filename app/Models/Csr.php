<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Csr extends Model
{
    use HasFactory;
    protected $table = 'csr';
    protected $fillable = ['full_name', 'designation', 'image','image_title', 'logo', 'about'];
}
