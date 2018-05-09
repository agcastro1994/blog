<?php

namespace App\Repositories;

class Posts

{


	public function all() {

		//return all posts

		return Post::all();
	}


}