<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //
    public function service_category(){
        return $this->belongsTo('App\ServiceCategory');
    }
    public function township(){
        return $this->belongsTo('App\Township');
    }
}
