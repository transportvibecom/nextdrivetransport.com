<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\MainPage\MainPageContent;
use App\Models\MainPage\Slider;
use App\Models\MainPage\Statistic;
use App\Models\MainPage\FrontMainpage;
use App\Models\Question;
use App\Models\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $sliderImages = Slider::get();
        $metadata = FrontMainpage::where('id', 1)->firstOrFail();
        $blogs = Blog::orderBy('id', 'desc')->limit(6)->get();
        return view('index', compact('sliderImages',  'blogs', 'metadata'));
    }
}
