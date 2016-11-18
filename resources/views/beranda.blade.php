@extends('layout')

@section('content')
<div class="container" style="margin-top: 100px">
	
	<div class="row">
   
	    <div class="col-sm-8">
	    	

			<!--Card Light-->
			@forelse($posts as $post)
			<div class="card">

			    <!--Card image-->
			    <div class="view overlay hm-white-slight">
			        <img src="http://mdbootstrap.com/images/reg/reg%20(59).jpg" class="img-fluid" alt="">
			        <a href="#">
			            <div class="mask"></div>
			        </a>
			    </div>
			    <!--/.Card image-->

			    <!--Card content-->
			    <div class="card-block">
			        <!--Title-->
			        <h4 class="card-title">{{ $post->title }}</h4>
			        <hr>
			        <!--Text-->
			        <p class="card-text">{{ $post->content }}</p>
			        
			        <a href="{{ url('/post/'.$post->id) }}" class="link-text"><h5>Read more <i class="fa fa-chevron-right"></i></h5></a>
			    </div>
			    <!--/.Card content-->

			</div>
			<!--/.Card Light-->
			@empty
				No List Post
			@endforelse


	    </div>
	    
	    <div class="col-sm-4">
	    	<h1>sidebar</h1>
	    </div>
    
  	</div>
</div>
@stop
