<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::query()->where('active','=',1)->orderByDesc('id')->with('user')->with('tags')->paginate(5);

        return view('posts', ['posts' => $posts]);
    }

    public function show($slug)
    {
        $post = Post::query()->where('slug','=',$slug)->with('user')->with('tags')->firstOrFail();

        return view('post', ['post' => $post]);
    }
}
