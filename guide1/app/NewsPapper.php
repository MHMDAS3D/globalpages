<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsPapper extends Model
{
    public function item()
    {
        return $this->hasMany('App\NewsItem');
    }
}
