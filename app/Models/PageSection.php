<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    use HasFactory;
    protected $table = 'page_section';
    protected $fillable = ['section', 'page_id'];

    public function sectionList(){
        return $this->hasMany(PageSetting::Class, 'section_id', 'id');
    }
}
