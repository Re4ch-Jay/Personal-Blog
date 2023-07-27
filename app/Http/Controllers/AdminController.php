<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->filter(request(['search', 'category']))->simplePaginate(20);
        $categories = Category::all();

        return view('admin.index', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('posts.create', [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        request()->validate([
            'title' => ['required'],
            'description' => ['required'],
            'category_id' => ['required', Rule::exists('categories', 'id')],
        ]);

        Post::create([
            'title' => request()->title,
            'description' => request()->description,
            'category_id' => request()->category_id,
            'user_id' => auth()->user()->id,
        ]);

        return redirect('/admin');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();

        return view('posts.edit', [
            'categories' => $categories,
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'category_id' => ['required', Rule::exists('categories', 'id')],
        ]);

        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'user_id' => auth()->user()->id,
        ]);

        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/admin');
    }
}
