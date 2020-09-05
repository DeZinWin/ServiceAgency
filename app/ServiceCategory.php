<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    //
    public function service_item(){
        return $this->hasMany('App\ServiceItem','service_category_id');
    }
    public function shop(){
        return $this->hasMany('App\Shop','service_category_id');
    }
}
