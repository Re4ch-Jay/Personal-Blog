<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->simplePaginate(20);

        return view('admin.index', [
            'posts' => $posts
        ]);
    }
}
