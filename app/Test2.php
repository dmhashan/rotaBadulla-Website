<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Test2 extends Model
{
	public function test() {
		return $this->belongsTo('App\Test');
	}
	
}