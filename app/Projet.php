<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $table = 'projets';
    public $timestamps = false;

    public function fichiers()
    {
        return $this->hasMany('App\Fichier');
    }

    public function client()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    //
}
