<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

	protected $fillable = ['body', 'post_id','user_id', 'created_at', 'updated_at'];
    //Asocia los comentarios con el post al que pertenecen
    public function post() {

		return $this->belongsto(Post::class);

    }

    //Asocia los comentarios con el usuario al que pertenecen
    public function user() {

		return $this->belongsto(User::class);

    }


}

