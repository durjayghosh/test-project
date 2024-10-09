<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuPermission extends Model
{
    use HasFactory;
    protected $table = 'menu_permission';
    protected $fillable = [
        'user_id',
        'menue_id'
    ];

    public function menu(){
        return $this->hasOne(MenuPermission::Class, 'menu_id', 'id');
    }
}
