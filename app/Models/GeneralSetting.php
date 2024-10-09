<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;

    protected $table = 'general_setting';

    protected $fillable = [
        "website_name",
        "contact_number",
        "alternate_contact_number",
        "copyright",
        "email",
        "youtube",
        "facebook",
        "instagram",
        "twitter",
        "wordpress",
        "logo",
        "header_css",
        "header_script",
        "footer_script"
    ];
}
