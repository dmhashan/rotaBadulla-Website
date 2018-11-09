<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Test extends Model
{
	public function test2() {
		return $this->hasMany('App\Test2');
	}
}