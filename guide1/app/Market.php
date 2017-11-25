<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    public function MarketCategory()
    {
        return $this->belongsTo('App\MarketCategory','category_id');
    }
}
