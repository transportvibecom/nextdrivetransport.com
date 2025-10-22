<?php

namespace App\Http\Controllers\Admin\MainPage;

use App\Http\Controllers\Controller;
use App\Models\MainPage\Statistic;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Statistic::get();
        return view('admin.main-page.statistics.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.main-page.statistics.create');
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
            'quantity' => 'required',
        ]);
        $data = $request->all();
        Statistic::create($data);
        return redirect()->route('statistics.index')->with('success', 'Complete');
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
        $item = Statistic::find($id);
        return view('admin.main-page.statistics.edit', compact('item'));
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
            'quantity' => 'required',
        ]);
        $data = $request->all();
        $item = Statistic::find($id);
        $item->update($data);
        return redirect()->route('statistics.index')->with('success', 'Complete');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Statistic::find($id);
        $item->delete();
        return redirect()->route('statistics.index')->with('success', 'Complete');
    }
}
