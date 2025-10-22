<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServicesRelinking;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesRelinkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = ServicesRelinking::orderBy('id')->paginate(20);
        return view('admin.relinking.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::get()->pluck('title', 'id');
        return view('admin.relinking.create', compact('services'));
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
			'anchor' => 'required',
			'service_id' => 'required',
			'target_service_id' => 'required',
        ]);
        $data = $request->all();
        ServicesRelinking::create($data);
        return redirect()->route('services-relinking.index')->with('success', 'Complete');
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
        $services = Service::get()->pluck('title', 'id');
        $item = ServicesRelinking::find($id);
        return view('admin.relinking.edit', compact('item', 'services'));
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
			'anchor' => 'required',
			'service_id' => 'required',
			'target_service_id' => 'required',
        ]);
        $data = $request->all();
        $item = ServicesRelinking::find($id);
        $item->update($data);
        return redirect()->route('services-relinking.index')->with('success', 'Complete');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ServicesRelinking::find($id);
        $item->delete();
        return redirect()->route('services-relinking.index')->with('success', 'complete');
    }
}
