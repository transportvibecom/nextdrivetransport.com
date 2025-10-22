<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::orderBy('id', 'desc')->paginate(15);
        return view('pages.blog.index', compact('blogs'));
    }

    public function show($slug){
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $blogs = Blog::orderBy('id', 'desc')->limit(3)->get();
        return view('pages.blog.show', compact('blog', 'blogs'));
    }
}
