<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny',Post::class);
        $posts = Post::all();

        return Inertia::render('Posts/Index', ['posts' => $posts]);
    }

    public function create()
    {
        $this->authorize('create',Post::class);
        return Inertia::render('Posts/Create');
    }

    public function store(StorePostRequest $request)
    {
        $this->authorize('create',Post::class);
        Post::create($request->validated());

        return redirect()->route('posts.index')->with(['message' => 'create successfully']);
    }

    public function edit(Post $post)
    {
        $this->authorize('create',Post::class);
        return Inertia::render('Posts/Edit',['post'=>$post]);
    }

    public function update(Post $post,StorePostRequest $request){

        $this->authorize('create',Post::class);
        $post->update($request->validated());
        return redirect()->route('posts.index')->with(['message' => 'update successfully']);

    }
    public function destroy(Post $post)
    {
        $this->authorize('create',Post::class);
        $post->delete();
        return redirect()->route('posts.index')->with(['message' => 'delete successfully']);
    }
}
