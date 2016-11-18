<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use App\Models\Post;
use App\Models\Comment;

class BlogController extends Controller
{
    public function beranda($value='')
    {
    	$posts = Post::all();

    	return view('beranda', compact('posts'));
    }

    public function single($id)
    {
    	$post = Post::find($id);
    
    	return view('single', compact('post'));
    }

    public function sendCommentSingle(Request $request)
    {
        $post_id = $request->input('article_id');
        $data = [
            'comment_title'     => $request->input('title'),
            'comment_content'   => $request->input('content'),
            'user_name'         => $request->input('name'),
            'article_id'        => $post_id
        ];

        $save = Comment::create($data);

        if ($save) {
            return redirect('post/'.$post_id)->with('message', 'Successfully sended');
        } else {
            return redirect('post/'.$post_id)->with('message', 'Failed');
        }

    } 
}
