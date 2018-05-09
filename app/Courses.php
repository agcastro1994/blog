<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    //
	 public function isimportant()
	{
		
		return $this->important == 1;
			# code...
	}

}
