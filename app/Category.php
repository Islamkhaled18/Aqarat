<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    public $table = 'categories';
    public $guarded = [];


    use HasTranslations;
    public $translatable = ['category_name'];

    public function projects()
    {
        return $this->hasMany('App\Project');
    }//realtionship with projects

    public function infrastructures()
    {
        return $this->hasMany('App\Infrastructure');
    }//relationship with infrastructure

    public function constructions()
    {
        return $this->hasMany('App\Construction');
    }//relationship with infrastructure

    protected function asJson($value)
    {
        return json_encode($value ,JSON_UNESCAPED_UNICODE);
    }
}
