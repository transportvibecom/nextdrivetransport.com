<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index(){
        $items = Destination::get();
        return view('pages.destination.index', compact('items'));
    }

    public function show($slug){
        $destination = Destination::where('slug', $slug)->firstOrFail();
//        $blogs = $destination->blog()->orderBy('id', 'desc')->get();
        return view('pages.destination.show', compact('destination'));
    }
}
