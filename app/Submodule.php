<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submodule extends Model
{
    
	public function activity() {

		return $this->hasMany('App\ActivityLog');

	}

	public function module(){

		return $this->belongsTo('App\Module');

	}

}
