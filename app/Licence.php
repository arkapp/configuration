<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Licence extends Model
{
    
	public function submodule() {

		return $this->belongsTo('App\Submodule');

	}

	public function app() {

		return $this->belongsTo('App\Application','app_id');

	}

	public function role() {

		return $this->belongsTo('App\Role');

	}

}
