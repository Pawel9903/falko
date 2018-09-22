<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageCategory extends Model
{
    public function images()
    {
        return $this->belongsToMany('App\Image');
    }
}
