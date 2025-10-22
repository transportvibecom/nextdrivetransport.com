<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AboutController extends Controller
{
    public function index(Request $request){
        $lastModified = $this->getLastModified();

        if ($lastModified && strtotime($request->header('If-Modified-Since')) >= $lastModified->timestamp) {
            return response('', 304);
        }

        return view('pages.about-us.index');
    }

    protected function getLastModified()
    {
        return Cache::get('last-modified');
    }
}
