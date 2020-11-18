<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

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

    // Relationship with other models
    public function portofolios ()
    {
        return $this->hasMany('App\Portofolio');
    }

    public function categories ()
    {
        return $this->hasMany('App\Category');
    }

    public function artikels ()
    {
        return $this->hasMany('App\Artikel');
    }

    public function bahans ()
    {
        return $this->hasMany('App\Bahan');
    }

    public function tintas ()
    {
        return $this->hasMany('App\Tinta');
    }
}
