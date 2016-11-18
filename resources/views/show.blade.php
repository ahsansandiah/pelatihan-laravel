<h2>{{ $post->title }}</h2>
<strong>{{ $post->author }} </strong> post at: {{ date("d/m/Y", strtotime($post->created_at)) }}
<p style="margin-bottom: 50px">{{ $post->content }} </p>
<!-- End Of Article -->

<hr>
<!-- FORM COMENT BELOW -->

<form action="{{ url('send-comment') }}" method="POST">
	{!! csrf_field() !!}
	<input type="hidden" name="post_id"  value="{{ $post->id }}">	
	<p><input type="text" name="user_name" placeholder="Nama"></p>
	<p><input type="text" name="comment_title" placeholder="Title"></p>
	<p><textarea cols="10" name="comment_content" placeholder="Isi Comment"></textarea></p>
	<p><button type="submit"> Send </button></p>
</form>

<hr style="margin-top: 50px; margin-bottom: 20px">

@forelse($post->comment as $comment)	
	<h4>{{ $comment->comment_title }}</h4> 
	oleh: {{ $comment->user_name }}, pada: {{ date("h:i:s d/m/Y", strtotime($comment->created_at)) }}
	<p style="border-bottom: 1px solid #555">{{ $comment->comment_content }}</p>
@empty
 Tidak ada komentar kakak.
@endforelse



