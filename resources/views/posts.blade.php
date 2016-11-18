<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Title Post</title>
  </head>
  <body>
    <!-- alert send email -->
    @if (session('success'))
        <strong>Success!</strong> Email Berhasil Dikirim
    @endif

    <table border="1">
      <head>
        <tr>
          <th>Title</th>
          <th>Content</th>
          <th>Author</th>
          <th>Action</th>
        </tr>
      </head>
      <body>
        @foreach ($posts as $key => $post)
        <tr>
          <td>{{ $post->title }}</td>
          <td>{{ $post->content }}</td>
          <td>{{ $post->author }}</td>
          <td>
            <a href="{{ url('/detail-post/'.$post->id) }}">Detail</a> | 
            <a href="{{ url('/edit-post/'.$post->id) }}">Update</a> |
            <a href="{{ url('/delete-post/'.$post->id) }}">Delete</a>
          </td>
        </tr>
        @endforeach

      </body>
    </table>
    {{ $posts->render() }}
  </body>
</html>
