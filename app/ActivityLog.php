<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    
	public function Submodule() {

		return $this->belongsTo('App\Submodule');

	}

	public function Sesion() {

		return $this->belongsTo('App\Sesion');

	}

}
