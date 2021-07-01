<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $table = 'brands';
    public $fillable = [
        'first_brand_image',
        'second_brand_image',
        'third_brand_image',
        'fourth_brand_image',
    ];
}
