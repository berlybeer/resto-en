<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    
    function myCompany()
    {
        // return $this->hasOne('App\Corp');
        return $this->hasOne('App\Corp', 'user_id', 'id');
    }
}
