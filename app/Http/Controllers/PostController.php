<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Mail;
// LOAD Models

use App\Models\Post;
use App\Models\Comment;


class PostController extends Controller
{
    public function getAll()
    {
      // $posts = Post::all();
      $posts = Post::paginate(10);

      return view('posts', compact('posts'));
    }
    
    public function create()
    {
    	return view('create');
    }

    public function store(Request $request)
    {
        $rules =  Validator::make($request->all(), [
            'title' => 'required|min:5|max:10',
            'content' => 'required',
            'author' => 'required'
        ]);

        if ($rules->fails()) {
            return $this->throwValidationException($request, $rules);
        }

    	$credentials = [
    		'title' 	=> $request->input('title'),
    		'content' 	=> $request->input('content'),
    		'author' 	=> $request->input('author'),
    	];

    	Post::create($credentials);

    	return redirect('/daftar-post');
    }

    public function show($id)
    {
    	$post = Post::with('comment')->find($id);

    	return view('show', compact('post'));
    }

    public function destroy($id)
    {
    	$post = Post::find($id);
    	$post->delete();

    	return redirect('/daftar-post');
    }

    public function edit($id)
    {
		$post = Post::find($id);
		// return response()->json($post);
		return view('edit', compact('post'));    	
    }

    public function update(Request $request, $id)
    {
    	$post = Post::find($id);
    	$post->title 	= $request->input('title');
    	$post->content 	= $request->input('content');
    	$post->author 	= $request->input('author');
    	$post->update();

    	return redirect('/daftar-post');
    }

    // Comment Code

    public function sendComment(Request $request)
    {
        $post_id = $request->input('post_id');
        $data = [
            'comment_title'     => $request->input('comment_title'),
            'comment_content'   => $request->input('comment_content'),
            'user_name'         => $request->input('user_name'),
            'article_id'        => $post_id
        ];

        Comment::create($data);

        return redirect('detail-post/'.$post_id);
    } 

    public function sendMail()
    {
        $data = [];

        $send = Mail::send('send-mail', $data, function($message) {
            $message->to('ahsansandiah@gmail.com', 'Jon Doe')->subject('Welcome!');
        });

        if (Mail::Failures()) {
            return "Gagal";
        }

        return redirect('/daftar-post')->with('success', 'Send Mail Success');
    }
}
