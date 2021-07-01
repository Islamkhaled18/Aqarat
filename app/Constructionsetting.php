<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Constructionsetting extends Model
{
    use HasTranslations;
    public $translatable = ['explain_quote','feature_one','feature_two','feature_three','feature_four'];

    public $guarded =[];
    protected $table = 'constructionsettings';


    protected function asJson($value)
    {
        return json_encode($value ,JSON_UNESCAPED_UNICODE);
    }
}
