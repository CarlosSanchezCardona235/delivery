<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messenger extends Model
{
    public function province()
    {
    	return $this->belongsTo('App\Province');
    }
}
