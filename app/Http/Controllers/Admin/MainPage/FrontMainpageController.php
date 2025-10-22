<?php

namespace App\Http\Controllers\Admin\MainPage;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
//use App\Models\MainPage\MainPageContent;
use App\Models\MainPage\FrontMainpage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FrontMainpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = FrontMainpage::get();
        return view('admin.main-page.front-mainpage.index', compact('items'));
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
        $item = FrontMainpage::find($id);
        return view('admin.main-page.front-mainpage.edit', compact('item'));
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
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_h1' => 'required',
        ]);
        $data = $request->all();
        $item = FrontMainpage::find($id);

        $item->update($data);
        return redirect()->route('front-mainpage.index')->with('success', 'Complete');
    }

}
