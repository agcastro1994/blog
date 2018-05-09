@extends('layouts.master')


@section('content')
	
    

    
        <div class="col-md-8 blog-main">
         @foreach($posts as $post)
           @include ('posts.post')
         @endforeach

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

          <button class="btn btn-primary btn-lg" data-toggle="modal" data-backdrop="static" data-target="#prueba">Probando</button>

          <div class="modal fade" id="prueba">
            
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal"></button>
                  <h4>Hello world</h4>
                  </div>
                  <div class="modal-body">Hi</div>
                  <div class="modal-header">
                    <div class="text-right">
                      <button class="btn btn-danger" data-dissmiss="modal">Close</button>
                    </div>
                  </div>
                
              </div>
            </div>

          </div>

        </div><!-- /.blog-main -->
		
      

     
@endsection