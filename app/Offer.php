<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public function offerList()
    {
        return $this->hasOne('App\OfferList');
    }
}
