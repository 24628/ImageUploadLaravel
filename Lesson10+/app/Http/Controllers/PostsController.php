<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;


class PostsController extends Controller
{
    public function __construct()

    {

        $this->middleware('auth')->except(['index', 'show']);

    }

    public function index()

    {
        $posts = Post::latest()

            ->filter(request(['month', 'year']))

            ->get();


        return view('posts.index', compact('posts'));

    }

    public function show(Post $post)

    {

        return view('posts.show', compact('post'));

    }

    public function create()

    {

        return view('posts.create');

    }

    public function  store()

    {

        $this->validate(request(), [

            'title' => 'required',

            'body' => 'required'

        ]);

        auth()->user()->publish(

            new Post(request(['title','body']))

        );


        return redirect('/');

    }

    public function edit(Post $post)

    {

        return view('posts.edit', compact('post'));

    }

    public function update(Request $request, Post $post)

    {

        if(\Auth::check()) {


            $request->validate([

                'title' => 'required',

                'body' => 'required'
            ]);

            $post->update($request->all());

            return redirect('/')->with('succes', 'Product updated succesfully');
        } else {

            return redirect('/')
                ->with('fail', 'Post is unable to be deleted successfully');

        }
    }

    public function destroy(Post $post)

    {
        if(\Auth::check())

        {

            $user_id = \Auth::user()->id;
            $post = Post::where('id', $post->id)->where('user_id', $user_id)->first();
            if($post) {

                $post->delete();

                return redirect('/')
                    ->with('success', 'Post deleted successfully');
            } else {

                return redirect('/')
                    ->with('fail', 'Post is unable to be deleted successfully');

            }
        }
    }
}
