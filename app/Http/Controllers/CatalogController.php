<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;
use App\Models\CatalogType;
class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogs= Catalog::with(['catalog_type'])->paginate();
        return view('catalogs.index',compact('catalogs'));

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catalogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
        $validated = $request->validate([
        'starts_at' => 'required',
        'ends_at'=> 'required',
        'catalog_type_id' => '' 
        ]);
         $catalogs=Catalog::create($validated);
         return view('catalogs.show', compact('catalogs'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catalogs= Catalog::with('catalog_type')->findorFail($id);
        $article_catalog=$catalogs->article_catalog()->paginate();
        return view('catalogs.show',compact('catalogs','article_catalog'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catalogs=Catalog::findOrFail($id);
        $catalog_types=CatalogType::pluck('catalog_type','id');
        return view('catalogs.edit', compact('catalogs','catalog_types'));
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
        $validated = $request->validate([
            'starts_at' => 'required',
            'ends_at'=> 'required',
            'catalog_type_id' => ''

        ]);
        $catalogs=Catalog::findOrFail($id);
        $catalogs-> fill($validated);
        $catalogs->save();
        return redirect() ->route('catalogs.show',['catalog'=>$catalogs ->id]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
