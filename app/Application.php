<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    
	public function modules() {

		return $this->belongsToMany('App\Module','App_id');

	}

	public function Licence() {

		return $this->belongsToMany('App\Licence','App_id');

	}

}
