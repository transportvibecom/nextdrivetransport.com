<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(){
        $questions = Question::get();
        return view('pages.faqs.index', compact('questions'));
    }
}
