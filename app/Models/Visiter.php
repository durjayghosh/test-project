<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visiter extends Model
{
    protected $table='visiters';
    protected $primaryKey='id';
    protected $fillable=['ip_address','visitDate','visitDatetime','location'];
    use HasFactory;
}
