<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sitesetting extends Model
{
    protected  $table = 'sitesettings';
    public $fillable = [
        'site_name',
        'contact_email',
        'contact_number',
        'company_address',
        'company_facebook_account',
        'company_instagram_account',
        'company_description',
        'company_key_words',
        'website_image',
    ];
}
