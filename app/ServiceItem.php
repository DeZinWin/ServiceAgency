<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceItem extends Model
{
    //
    public function service_category(){
        return $this->belongsTo('App\ServiceCategory');
    }
}
