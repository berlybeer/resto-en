<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    public function getNameAttribute($value)
    {
    	return ucfirst($value);
    }

    public function getPriceAttribute($value)
    {
    	return $value-($value*(10/100));
    }
}
