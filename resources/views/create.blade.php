<form method="POST" action="{{ url('create-post/store') }}">
	{!! csrf_field() !!}
    <table>
        <tr>
            <td>Title</td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td></td>
            <td>  
                @if($errors->first('title'))
                  <div class="alert alert-danger" role="alert">{{ $errors->first('title') }}</div>
                @endif
            </td>
        </tr>
        <tr>
            <td>Content</td>
            <td><textarea name="content"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td>  
                @if($errors->first('content'))
                  <div class="alert alert-danger" role="alert">{{ $errors->first('content') }}</div>
                @endif
            </td>
        </tr>
        <tr>
            <td>Author</td>
            <td><input type="text" name="author"></td>
        </tr>
        <tr>
            <td></td>
            <td>  
                @if($errors->first('author'))
                  <div class="alert alert-danger" role="alert">{{ $errors->first('author') }}</div>
                @endif
            </td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" value="Add">Create</button></td>
        </tr>
    </table>
</form>