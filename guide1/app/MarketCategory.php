<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarketCategory extends Model
{
    protected $table = 'market_category';

    public function Category(){
        return $this->belongsTo('App\Category','catigory_id');//(model name , foreign_key)
    }

    public function Market()
    {
        return $this->hasMany('App\Market');
    }

}
