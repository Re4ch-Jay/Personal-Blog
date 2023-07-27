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
    public function store(Request $request)
    {

        $this->validation();

        Post::create($this->attributes($request));

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
        $this->validation();

        $post->update($this->attributes($request));

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

    public function validation()
    {
        return request()->validate([
            'title' => ['required'],
            'description' => ['required'],
            'markdown' => ['required'],
            'category_id' => ['required', Rule::exists('categories', 'id')],
        ]);
    }

    public function attributes($request)
    {
        return [
            'title' => $request->title,
            'description' => $request->description,
            'markdown' => $request->markdown,
            'category_id' => $request->category_id,
            'user_id' => auth()->user()->id,
        ];
    }
}
