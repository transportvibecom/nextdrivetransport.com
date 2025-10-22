<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Blog::orderBy('id', 'desc')->paginate(20);
        return view('admin.blog.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinations = Destination::get()->pluck('title', 'id');
        return view('admin.blog.create', compact('destinations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'shortDesc' => 'required',
            'desc' => 'required',
            'meta_title' => 'nullable',
            'meta_description' => 'nullable',
            'meta_h1' => 'nullable',
            'menu_anchor' => 'nullable',
            'thumbnail' => 'nullable',
            'switcher' => 'nullable',
            'region_id' => 'nullable',
        ]);
        $data = $request->all();
        $data['thumbnail'] = Blog::uploadImage($request);
        Blog::create($data);
        return redirect()->route('blog.index')->with('success', 'Complete');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Blog::find($id);
        $destinations = Destination::get()->pluck('title', 'id');
        return view('admin.blog.edit', compact('item', 'destinations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'shortDesc' => 'required',
            'desc' => 'required',
            'meta_title' => 'nullable',
            'meta_description' => 'nullable',
            'meta_h1' => 'nullable',
            'menu_anchor' => 'nullable',
            'thumbnail' => 'nullable',
            'switcher' => 'nullable',
            'region_id' => 'nullable',
        ]);
        $data = $request->all();
        $item = Blog::find($id);
        if ($file = Blog::uploadImage($request, $item->thumbnail)) {
            $data['thumbnail'] = $file;
        }
        if(!isset($data['switcher'])){
            $data['switcher'] = null;
        }
        if(!isset($data['region'])){
            $data['region'] = null;
        }
        $item->update($data);
        return redirect()->route('blog.index')->with('success', 'Complete');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Blog::find($id);
        $item->delete();
        Storage::delete($item->thumbnail);
        return redirect()->route('blog.index')->with('success', 'Service deleted');
    }
}
