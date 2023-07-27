<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
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
}
