<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('id', 'desc')->paginate(20);
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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
            'meta_title' => 'nullable',
            'meta_description' => 'nullable',
            'meta_h1' => 'nullable',
            'menu_anchor' => 'nullable',
            'desc' => 'required',
            'descOne' => 'nullable',
            'descTwo' => 'nullable',
            'descThree' => 'nullable',
            'factTitle' => 'nullable',
            'factOne' => 'nullable',
            'factTwo' => 'nullable',
            'factThree' => 'nullable',
            'factFour' => 'nullable',
            'thumbnail' => 'nullable',
            'full_image' => 'nullable',
        ]);
        $data = $request->all();
        $data['thumbnail'] = Service::uploadImage($request, null, 'thumb');
        $data['full_image'] = Service::uploadImage($request, null, 'full');
        Service::create($data);
        return redirect()->route('services.index')->with('success', 'Service added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $service = Service::find($id);
//        return view('pages.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.services.edit', compact('service'));
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
            'descOne' => 'nullable',
            'descTwo' => 'nullable',
            'descThree' => 'nullable',
            'factTitle' => 'nullable',
            'factOne' => 'nullable',
            'factTwo' => 'nullable',
            'factThree' => 'nullable',
            'factFour' => 'nullable',
            'thumbnail' => 'nullable',			
            'full_image' => 'nullable',
        ]);
        $data = $request->all();
        $service = Service::find($id);
        if ($file = Service::uploadImage($request, $service->thumbnail,'thumb')) {
            $data['thumbnail'] = $file;
        }
        if ($file2 = Service::uploadImage($request, $service->full_image,'full')) {
            $data['full_image'] = $file2;
        }
        $service->update($data);
        return redirect()->route('services.index')->with('success', 'Service added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        Storage::delete($service->thumbnail);
        Storage::delete($service->full_image);
        return redirect()->route('services.index')->with('success', 'Service deleted');
    }
}
