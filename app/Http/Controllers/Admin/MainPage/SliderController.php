<?php

namespace App\Http\Controllers\Admin\MainPage;

use App\Http\Controllers\Controller;
use App\Models\MainPage\MainPageContent;
use App\Models\MainPage\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Slider::get();
        return view('admin.main-page.first-section.slider.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.main-page.first-section.slider.create');
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
            'thumbnail' => 'required',
        ]);
        $data = $request->all();
        $data['thumbnail'] = Slider::uploadImage($request);
        $item = Slider::create($data);
        return redirect()->route('slider.index')->with('success', 'Complete');
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
        $item = Slider::find($id);
        return view('admin.main-page.first-section.slider.edit', compact('item'));
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
            'thumbnail' => 'required',
        ]);
        $data = $request->all();
        $item = Slider::find($id);
        if ($file = Slider::uploadImage($request, $item->thumbnail)) {
            $data['logo'] = $file;
        }
        $item->update($data);
        return redirect()->route('slider.index')->with('success', 'Complete');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Slider::find($id);
        $item->delete();
        Storage::delete($item->thumbnail);
        return redirect()->route('slider.index')->with('success', 'Complete');
    }
}
