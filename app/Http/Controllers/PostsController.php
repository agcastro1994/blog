<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\User;

// use App\Http\Controllers\Auth;

// use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;

use App\Mail\Publication;

use Carbon\Carbon;

class PostsController extends Controller

{

	//authentication

	public function __construct(){

		$this->middleware('auth')->except('index','show');
	}

    public function index(){

    	//query to order the post by months (archives sidebar) temporary -> moved to Post.php and then to the view composer (app providers app service provider)

    	

    	//ordering the post by date, from latest to newest
			$posts = Post::latest();

			if (request(['month', 'year'])) {
			    $posts->filter(request(['month', 'year']));
			}

			$posts = $posts->get();
    	// $posts = Post::latest()->get();

    	// if(request('month')){

    	// 	$posts->whereMonth('created_at', Carbon::parse($month)->month);
    	// }

    	// if(request('year')){

    	// 	$posts->whereMonth('created_at', $year);
    	// }

    	return view('posts.index', compact('posts', 'archives'));	

    }

    	

    public function show($id){

    	$post=Post::find($id);

    	return view('posts.show', compact('post'));	

    }

    public function create(){

    	return view('posts.create');

    } 

    public function store(){

    	//dd(request()->all());

    	//validation

    	$this->validate(request(),[
    		'title' => 'required',
    		'body' => 'required'
    		    	]);


    	$post = new Post;

    	$post->title= request('title');
    	$post->body= request('body');
    	$post->user_id= auth()->id();
    	$post->save();

        session()->flash('message', 'Your post has been published');

    	// $user=Auth::user()->email;
    	// \Mail::to($user)->send(new Publication);
    	return redirect('/');


    }
}
