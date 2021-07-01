<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinionsetting extends Model
{
    public $table = 'opinionsettings';
    public $fillable = [
        'customer_one_name',
        'customer_one_job',
        'customer_one_opinion',
        'customer_two_name',
        'customer_two_job',
        'customer_two_opinion',
    ];
}
