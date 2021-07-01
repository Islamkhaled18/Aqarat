<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    public $table = 'contactuses';
    public $fillable = [
        'sender_name',
        'sender_email',
        'sender_message',
        'view'
    ];
}
