<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producer;

class ProducerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producers= Producer::paginate();
        return view('Producers.index',compact('producers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'producer_code'=> 'required|unique:producers|max:255',
            'producer_name' => 'required|unique:producers|max:255'            
        ]);
        $producers=Producer::create($validated);
        return view('producers.show',compact('producers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producers= Producer::findorFail($id);
        return view('Producers.show',compact('producers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producers=Producer::findOrFail($id);
        return view('producers.edit', compact('producers'));
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
        $validated=$request -> validate ([
            'producer_code'=> 'required|max:255',
            'producer_name' => 'required|max:255'
             ]);

        $producers=Producer::findOrFail($id);
        $producers -> fill($validated);
        $producers -> save();

        return view('producers.show',compact ('producers'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Producer::destroy($id);
        return redirect() ->route('producers.index');
    }
}
