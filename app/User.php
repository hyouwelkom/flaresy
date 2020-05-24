<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        return $this->niveau_id == 1;
    }

    public function reseaux()
    {
        return $this->belongsToMany('App\Reseau')->withPivot('link');
    }

    public function scopeAdministrateurs($query)
    {
        return $query->where('niveau_id', 1);
    }

    public function scopeClients($query)
    {
        return $query->where('niveau_id', 2);
    }

    public function niveau()
    {
        return $this->belongsTo('App\Niveau');
    }

    public function projets()
    {
        return $this->hasMany('App\Projet');
    }
}
