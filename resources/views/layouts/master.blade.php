<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Application</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">       
 <link href="/css/blog.css" rel="stylesheet">

     <style>
            html, body {
                /*background-color: #fff;
                color: #636b6f;*/
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            /*.full-height {
                height: 100vh;
            }*/

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 0px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
  </head>

  <body>

    
	@include('layouts.nav')

    @if ($flash = session('message'))

        <div class="alert alert-success" role="alert">
            
            {{ $flash }}

        </div>
    @endif
	
	@include('layouts.jumbotron')
    
	<!-- <div class="container"> -->

		<main role="main" class="container">
      <div class="row">
      	
	@yield('content')
	
	@include('layouts.sidebar')

	<!-- </div> -->
	 </div><!-- /.row -->

    </main><!-- /.container -->
    @include('layouts.footer')
    
  </body>
</html>
