<form method="POST" action="{{ url('/edit-post/update/'.$post->id) }}">
	{!! csrf_field() !!}
    <table>
        <tr>
            <td>Title</td>
            <td><input type="text" name="title" value="{{ $post->title }}"></td>
        </tr>
        <tr>
            <td>Content</td>
            <td><textarea name="content">{{ $post->content }}</textarea></td>
        </tr>
        <tr>
            <td>Author</td>
            <td><input type="text" name="author" value="{{ $post->author }}"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Update</button></td>
        </tr>
    </table>
</form>