<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $blogs = Blog::where('switcher', 'on')->get();
        return view('pages.services.index', compact('blogs'));
    }

    public function show($slug){
        $service = Service::where('slug', $slug)->firstOrFail();
        return view('pages.services.show', compact('service'));
    }
}
