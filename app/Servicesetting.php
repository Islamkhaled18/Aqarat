<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Servicesetting extends Model
{
    public $guarded =[];
    protected $table = 'servicesettings';

    use HasTranslations ;

    public $translatable = [
        'constructions_explain',
        'interiordesign_explain',
        'roads_explain',
        'infrastructures_explain',
        'service_image',
    ];

   public function asJson($value)
   {
       return json_encode($value , JSON_UNESCAPED_UNICODE);
   }

}
