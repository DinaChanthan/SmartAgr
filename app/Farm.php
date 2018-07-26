<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    public function users()
    {
    	return $this->belongTo('App/User');
    }
}
