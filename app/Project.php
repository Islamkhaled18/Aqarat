<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Project extends Model
{

    use HasTranslations;

    public $translatable = ['client_name','location','start_date','cost','details'];

    protected $table = 'projects';
    public $guarded =[];

    public function category()
    {
        return $this->belongsTo('App\Category','category_id');
    }

    public $primaryKey = 'id';



}
