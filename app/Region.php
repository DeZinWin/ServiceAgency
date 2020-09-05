<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //
    public function township(){
        return $this->hasMany('App\Township','region_id');
    }
}
