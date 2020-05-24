<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    protected $table = "productions";
    public $timestamps = false;

    public function categories()
    {
        return $this->belongsToMany('App\Categorie', 'categorie_production');
    }
}
