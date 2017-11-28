<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsItem extends Model
{
    public function NewsPaper()
    {
        return $this->belongsTo('App\NewsPaper','news_papper_id');
    }
    public function type()
    {
        return $this->belongsTo('App\ItemType','item_type_id');
    }
}
