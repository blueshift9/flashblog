<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Yajra\DataTables\DataTables;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('admin.posts.create')->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'description' => 'required',
            'active' => 'required'
        ]);
        Post::create($request->all());

        $request->session()->flash('status', 'Post created successfully.');

        return back()->with('success','Item created successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.posts.edit', ['post' => $post]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $post->update([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'description' => $request->description,
        ]);
        $post->save();

        return redirect('/admin/posts')->with('success', 'Post updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function datatable()
    {
        return Datatables::of(Post::query())->make(true);
    }
}
