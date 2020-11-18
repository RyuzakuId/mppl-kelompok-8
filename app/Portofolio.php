<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $fillable = [
        'category_id', 'img_dir'
    ];

    // Relationship with other models
    public function categories ()
    {
        return $this->belongsTo('App\Category');
    }
}
