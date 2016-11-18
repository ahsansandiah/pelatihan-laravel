@extends('layout')

@section('content')
<div class="container" style="margin-top: 100px">
	
	<div class="row">
   
	    <div class="col-sm-12">
	    	

			<!--Card Light-->
			<div class="card">

			    <!--Card content-->
			    <div class="card-block">
			        <!--Title-->
			        <h4 class="card-title">{{ $post->title }}</h4>
			        <hr>
			        <!--Text-->
			        <p class="card-text">{{ $post->content }}</p>
			        
			    </div>
			    <!--/.Card content-->

			</div>
			<!--/.Card Light-->



	    </div>
	    
    
  	</div>

	<!--Section: Leave a reply (Not Logged In User)-->
	<form method="post" action="{{ url('send-comment-single') }}">
		
		<section style="margin-top:100px">

		    <!--Leave a reply form-->
		    <div class="reply-form">
		        <h4 class="section-heading">Leave a reply </h4>

		        @if (session('message'))
			        {{ session('message') }}
			    @endif

		        {!! csrf_field() !!}
		        <input type="hidden" name="article_id" value="{{ $post->id }}">

		        <div class="md-form" style="margin-top:50px" >
		            <input type="text" id="form22" class="form-control" name="name" required>
		            <label for="form22">Your name</label>
		        </div>

		        <div class="md-form">
		            <input type="text" id="form32" class="form-control" name="title" required>
		            <label for="form32">Comment Title</label>
		        </div>

		        <div class="md-form">
		            <textarea type="text" id="form18" class="md-textarea" name="content" required></textarea>
		            <label for="form18">Your message</label>
		        </div>

		        <div class="text-xs-center">
		            <button class="btn btn-primary">Submit</button>
		        </div>
		    </div>
		    <!--/.Leave a reply form-->

		</section>
		<!--/Section: Leave a reply (Not Logged In User)-->
	</form>
</div>

@stop