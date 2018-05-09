<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//necesario
use App\Comment;
use App\Post;

class CommentsController extends Controller
{
    	//authentication 

	public function __construct(){

		$this->middleware('auth');
	}



    //creador de comentarios


    public function store(Post $post){

    	$this->validate(request(),[
    			'body' => 'required|min:2|max:200'
    		    	]);

    	Comment::create([

    		'body'=> request('body'),
    		'post_id'=> $post->id,
    		'user_id'=> auth()->id()

    	]);

    	return back();

    }
}
