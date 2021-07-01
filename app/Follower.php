<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    public $table = 'followers';
    public $fillable = [
        'follower_name',
        'follower_email',
    ];
}
