<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Courses</title>

</head>
<body>

	
	<ul>
	@foreach ($socialweb as $socialweb)
		<li>
			
			<a href="/courses/{{ $socialweb->id }}">
				{{ $socialweb->title }} 
				@if ($socialweb->isImportant())
					*
				@endif
				
			</a>
			
		</li>
	@endforeach
	</ul>
	
</body>
</html>