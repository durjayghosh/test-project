<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $table='reviews';
    protected $primaryKey='reviews_id';
    protected $fillable=['name','owner_response','client_review'];
    use HasFactory;
}