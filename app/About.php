<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    public function getImagesDecodedAttribute() {
        return json_decode($this->images);
    }
}
