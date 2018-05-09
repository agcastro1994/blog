@extends('layouts.master')

@section('content')
  <div class="col-md-8 blog-main">
	<h1> {{ $post->title }}</h1>

	<p>{{ $post->user->name }} on {{ $post->created_at->toFormattedDateString() }}</p>

	<p> {{ $post->body }}</p>
	
	<br>
	<br>
	<hr>

	<div class="comments">
		
		<ul class="list-group">

			@foreach ($post->comments as $comment)

				<li class="list-group-item">
					<strong>
						{{ $comment->user->name}} &nbsp; {{ $comment->created_at->diffForHumans() }}:&nbsp;
					</strong>

					{{ $comment->body }}

				</li>
			@endforeach
		</ul>
	</div>

	<br>
	<br>
	<hr>

	<div class="card">

		<div class="card-block">
			
			<form method="POST" action="/posts/{{ $post->id }}/comments">

				{{ csrf_field() }}
				
				<div class="form-group">
					
					<textarea name="body"  placeholder="Your comment here" class="form-control" required></textarea>

				</div>

				<div class="form-group">
			  		<button type="submit" class="btn btn-success">Publish</button>
			    </div>

			</form>
				
				<br>

				@include ('layouts.errors')
		</div>
	
	</div>

	

  </div>
@endsection