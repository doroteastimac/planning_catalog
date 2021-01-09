<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatalogType;
class CatalogTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalog_types= CatalogType::paginate();
        return view('catalogtypes.index',compact('catalog_types'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catalogtypes.create');
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
            'catalog_type'=> 'required|unique:catalog_types|max:255',
            
        ]);
        $catalog_types=CatalogType::create($validated);
        return view('catalogtypes.show',compact('catalog_types'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catalog_types= CatalogType::findOrFail($id);
        return view('catalogtypes.show',compact('catalog_types'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catalog_types=CatalogType::findOrFail($id);
        return view('catalogtypes.edit', compact('catalog_types'));
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
        $validated=$request->validate([
            'catalog_type'=> 'required|max:255',
            
        ]);
        $catalog_types=CatalogType::findOrFail($id);
        $catalog_types -> fill($validated);
        $catalog_types -> save();

        return view('catalogtypes.show',compact ('catalog_types'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CatalogType::destroy($id);
        return redirect() ->route('catalogtypes.index');
    }
}
