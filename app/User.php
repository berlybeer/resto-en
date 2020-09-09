<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //

    function myCorp()
    {
    	// return $this->hasMany('App\Corp');
    	return $this->hasMany('App\Corp','user_id','id');
    	// return $this->hasMany('model_path','f.key','l.key');
    }
}
