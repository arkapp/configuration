<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    
	public function Submodules() {

		return $this->hasMany('App\Submodule');

	}

	public function App() {

		return $this->belongsTo('App\Application','app_id');

	}

}
