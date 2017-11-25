<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function jobtype(){
        return $this->belongsTo('App\JobType','type_id');//(model name , foreign_key)
    }
}
