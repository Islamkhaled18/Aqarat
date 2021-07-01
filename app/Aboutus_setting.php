<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Aboutus_setting extends Model
{
    protected $table = 'aboutus_settings';

    protected $guarded= [];

    use HasTranslations ;

    public $translatable = [
        'aboutus_headertext',
        'aboutus_paragraphtext',
        'quote_headertaxt',
        'quote_paragraphtext',
        'reason_one',
        'explain_reason_one',
        'reason_two',
        'explain_reason_two',
        'reason_three',
        'explain_reason_three',
        ];


}
