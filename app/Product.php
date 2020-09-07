<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    public $timestamps = false;

    public function setNameAttribute($value)
    {
    	return $this->attributes['name']=ucfirst($value);
    }

    public function setPriceAttribute($value)
    {
    	return $this->attributes['price']=$value+1000;
    }
}
