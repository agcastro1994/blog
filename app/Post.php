<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{	//Asocia los post con los comentarios asignados a el
	public function comments(){

		return $this->hasMany(Comment::class);
	}

	//Asocia los post con el usuario
	public function user(){

		return $this->belongsTo(User::class);
	}
    // i dont know why

     public function scopeFilter($query, $filters){

		if (isset($filters['month'])){
		if($month = $filters['month']){
		$query->whereMonth('created_at', Carbon::parse($month)->month);
		}
		}

		if(isset($filters['year'])){
		if($year = $filters['year']){
		$query->whereYear('created_at', $year);
		}
		}
	}

	public static function archives(){

		return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')->groupBy('year','month')->orderByRaw('min(created_at) desc')->get()->toArray();

	}

	public function tags() {

		return $this->belongsToMany(Tag::class);
	}

}
