<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Service;
use App\Models\Destination;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index(){
        $service = Service::orderBy('updated_at', 'desc')->first();
        $blog = Blog::orderBy('updated_at', 'desc')->first();
        $destination = Destination::orderBy('updated_at', 'desc')->first();

        return response()->view('sitemap.index', [
            'service' => $service,
            'blog' => $blog,
            'destination' => $destination,
        ])->header('Content-Type', 'text/xml');
    }

    public function services(){
        $services = Service::orderBy('updated_at', 'desc')->get();
        return response()->view('sitemap.services', [
            'services' => $services,
        ])->header('Content-Type', 'text/xml');
    }

    public function blogs(){
        $blogs = Blog::orderBy('updated_at', 'desc')->get();
        return response()->view('sitemap.blogs', [
            'blogs' => $blogs,
        ])->header('Content-Type', 'text/xml');
    }
	
    public function destinations(){
        $destinations = Destination::orderBy('updated_at', 'desc')->get();
        return response()->view('sitemap.destinations', [
            'destinations' => $destinations,
        ])->header('Content-Type', 'text/xml');
    }
	
    public function indexPages(){
        return response()->view('sitemap.indexPages')->header('Content-Type', 'text/xml');
    }
	
}
