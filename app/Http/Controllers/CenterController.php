<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Center;
class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centers= Center::paginate();
        return view('centers.index',compact('centers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('centers.create');
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
            'center_code'=> 'required|unique:centers|max:255',
            'center_name' => 'required|unique:centers|max:255',
            'center_address' => 'required|unique:centers|max:255'
        ]);
        $centers=Center::create($validated);
        return view('centers.show',compact('centers'));
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $centers= Center::findorFail($id);
        return view('centers.show',compact('centers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $centers=Center::findOrFail($id);
        return view('centers.edit', compact('centers'));

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
            'center_code'=> 'required|max:255',
            'center_name' => 'required|max:255',
            'center_address' => 'required|max:255'
        ]);

        $centers=Center::findOrFail($id);
        $centers -> fill($validated);
        $centers -> save();

        return view('centers.show',compact ('centers'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Center::destroy($id);
        return redirect() ->route('centers.index');
    }
}
