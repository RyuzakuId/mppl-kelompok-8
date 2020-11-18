<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Relationship wiyh other models
    public function portofolios ()
    {
        return $this->hasMany('App\Portofolio');
    }
}
